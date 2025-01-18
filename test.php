<?php

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



// Get user IP
$get_ip_add = getUserIP();

// Fetch cart details
$cart_query = "SELECT c.product_id, c.quantity, 
                      p.product_title, p.product_image1, p.product_price
               FROM cart_details c
               JOIN products p ON c.product_id = p.product_id
               WHERE c.ip_address = '$get_ip_add'";

$result = mysqli_query($con, $cart_query);

if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $product_id => $new_quantity) {
        $new_quantity = (int) $new_quantity;
        
        // Update the quantity in cart
        $update_query = "UPDATE cart_details SET quantity = '$new_quantity' WHERE product_id = '$product_id' AND ip_address = '$get_ip_add'";
        mysqli_query($con, $update_query);
    }

    echo "<script>window.location.href='cart.php';</script>";
    exit();
}
?>

<form action="" method="post">
    <table class="table table-cart table-mobile">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='5' style='text-align: center;'>Your cart is empty.</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_image = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $product_quantity = $row['quantity'];
                    $total_price = $product_price * $product_quantity;

                    echo "
                    <tr>
                        <td class='product-col'>
                            <div class='product'>
                                <figure class='product-media'>
                                    <a href='product.php?product_id=$product_id'>
                                        <img src='/EZbuy_Ecommerce/admin_area/product_images/$product_image' alt='$product_title'>
                                    </a>
                                </figure>
                                <h3 class='product-title'>
                                    <a href='product.php?product_id=$product_id'>$product_title</a>
                                </h3>
                            </div>
                        </td>
                        <td class='price-col'>$$product_price</td>
                        <td class='quantity-col'>
                            <div class='cart-product-quantity'>
                                <input type='number' class='form-control update-quantity' name='quantity[$product_id]' data-product-id='$product_id' value='$product_quantity' min='1' max='10' step='1' required>
                            </div>
                        </td>
                        <td class='total-col' id='total_$product_id'>$$total_price</td>
                        <td class='remove-col'>
                            <a href='remove_cart.php?remove_id=$product_id' class='btn-remove'><i class='icon-close'></i></a>
                        </td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <div class="cart-bottom">
        <button type="submit" name="update_cart" class="btn btn-outline-dark-2">
            <span>UPDATE CART</span><i class="icon-refresh"></i>
        </button>
    </div>
</form>

<!-- Inline JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".update-quantity").forEach(input => {
        input.addEventListener("input", function () {
            let productId = this.getAttribute("data-product-id");
            let newQuantity = this.value;
            let price = parseFloat(this.closest("tr").querySelector(".price-col").innerText.replace("$", ""));
            let totalElement = document.getElementById("total_" + productId);

            // Update total price in UI
            let newTotal = (newQuantity * price).toFixed(2);
            totalElement.innerText = `$${newTotal}`;
        });
    });
});
</script>