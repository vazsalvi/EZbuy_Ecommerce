<?php
// Start the session
session_start();

// Now, you can use $_SESSION['username'] for the logged-in user's username
echo "Welcome, " . $_SESSION['username'];  // Display the username

include('./includes/connect.php');
include('./functions/common_function.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form is submitted!<br>";
    var_dump($_POST);
}

$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<p>Please log in to view your billing details.</p>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch user details from the database
$sql = "SELECT username, user_email, user_mobile, user_full_name, user_country_name, user_street_name, 
        user_town_city, user_state_country, user_post_zip 
        FROM user_table WHERE user_id = ?";

$stmt = $con->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    echo "<p>User details not found.</p>";
    exit;
}

// Extract user details
$full_name = $user['user_full_name'];
$email = $user['user_email'];
$phone = $user['user_mobile'];
$country = $user['user_country_name'];
$street = $user['user_street_name'];
$city = $user['user_town_city'];
$state = $user['user_state_country'];
$zip = $user['user_post_zip'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['place_order'])) {
    // Get payment method and user details
    $payment_method = $_POST['payment_method'];  // Corrected to POST instead of GET
    $user_id = $_SESSION['user_id'];

    // Fetch the cart details
    $query = "SELECT p.product_title, p.product_price, c.quantity 
              FROM cart_details c
              JOIN products p ON c.product_id = p.product_id
              WHERE c.ip_address = ?";

    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $user_ip);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        $product_names = [];
        $total_price = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $product_names[] = $row['product_title'] . " (x" . $row['quantity'] . ")";
            $total_price += $row['product_price'] * $row['quantity'];
        }

        // Convert product names to a comma-separated string
        $products_name = implode(", ", $product_names);
        $invoice_number = "INV" . time(); // Unique invoice number
        $order_date = date("Y-m-d H:i:s");

        echo "Invoice Number: " . $invoice_number . "<br>";
        echo "Products Name: " . $products_name . "<br>";
        echo "Total Price: " . $total_price . "<br>";

        // Insert order into `user_orders`
        $insert_order = "INSERT INTO user_orders (user_id, amount_due, invoice_number, products_name, 
                        order_date, order_status, payment_method) 
                        VALUES (?, ?, ?, ?, ?, 'Pending', ?)";

        $stmt = $con->prepare($insert_order);
        $stmt->bind_param("idssss", $user_id, $total_price, $invoice_number, $products_name, $order_date, $payment_method);

        if ($stmt->execute()) {
            // Remove cart items after successful order placement
            $delete_cart = "DELETE FROM cart_details WHERE ip_address = ?";
            $stmt = $con->prepare($delete_cart);
            $stmt->bind_param("s", $user_ip);
            $stmt->execute();

            echo "<script>alert('Order placed successfully!'); window.location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: Order not placed. " . mysqli_error($con) . "');</script>";
        }
    } else {
        echo "<script>alert('Your cart is empty!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <?php include("./includes/header.php")?>

        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Checkout<span>Shop</span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div>
            </nav>

            <div class="page-content">
                <div class="checkout">
                    <div class="container">
                        <div class="checkout-discount">
                            <form action="#">
                                <input type="text" class="form-control" required id="checkout-discount-input">
                                <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
                            </form>
                        </div>
                        <form action="checkout.php" method="POST">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h2 class="checkout-title mb-4">Billing Details</h2>
                                    <div class="border p-4">
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label class="font-weight-bold">Full Name *</label>
                                                <p class="form-control bg-white"><?php echo htmlspecialchars($full_name); ?></p>
                                            </div>
                                        </div>
                                        
                                        <label class="font-weight-bold">Country *</label>
                                        <p class="form-control bg-white"><?php echo htmlspecialchars($country); ?></p>

                                        <label class="font-weight-bold">Street Address *</label>
                                        <p class="form-control bg-white"><?php echo htmlspecialchars($street); ?></p>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label class="font-weight-bold">Town / City *</label>
                                                <p class="form-control bg-white"><?php echo htmlspecialchars($city); ?></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="font-weight-bold">State / County *</label>
                                                <p class="form-control bg-white"><?php echo htmlspecialchars($state); ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label class="font-weight-bold">Postcode / ZIP *</label>
                                                <p class="form-control bg-white"><?php echo htmlspecialchars($zip); ?></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="font-weight-bold">Phone *</label>
                                                <p class="form-control bg-white"><?php echo htmlspecialchars($phone); ?></p>
                                            </div>
                                        </div>

                                        <label class="font-weight-bold">Email Address *</label>
                                        <p class="form-control bg-white"><?php echo htmlspecialchars($email); ?></p>
                                    </div>


                                    
                                    <label class="font-weight-bold mt-3">Order Notes (Optional)</label>
                                    <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                </div>
                                <aside class="col-lg-3">
                                    <div class="summary">
                                        <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
                                    
                                    <table class="table table-summary">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                                </tr>
                                                </thead>
                                                
                                                <tbody>
                                    <?php
                                            $total_price = 0;
                                            // Fetch cart details from the database
                                            $query = "SELECT p.product_title, p.product_price, c.quantity 
                                            FROM cart_details c
                                            JOIN products p ON c.product_id = p.product_id
                                            WHERE c.ip_address = ?";
                                            $stmt = mysqli_prepare($con, $query);
                                            mysqli_stmt_bind_param($stmt, "s", $user_ip);
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $product_total = $row['product_price'] * $row['quantity'];
                                                    echo "<tr><td><a href='#'>{$row['product_title']}</a></td><td>₹{$product_total}</td></tr>";
                                                    $total_price += $product_total;
                                                }
                                            } else {
                                                echo "<tr><td colspan='2'>No products in the cart</td></tr>";
                                            }
                                            ?>
                                            
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>₹<?php echo number_format($total_price, 2); ?></td>
                                                </tr><!-- End .summary-subtotal -->
                                                <tr>
                                                    <td>Shipping:</td>
                                                    <td>Free shipping</td>
                                                    </tr>
                                                    <tr class="summary-total">
                                                        <td>Total:</td>
                                                        <td>₹<?php echo number_format($total_price, 2); ?></td>
                                                        </tr><!-- End .summary-total -->
                                                        </tbody>
                                                        </table><!-- End .table table-summary -->
                                                        </div><!-- End .summary -->
                                                        <div class="custom-control custom-checkbox mt-4">
                                                            <input type="checkbox" class="custom-control-input" id="checkout-diff-address">
                                                            <label class="custom-control-label font-weight-bold" for="checkout-diff-address">Ship to a different address?</label>
                                                        </div>
                                                        <label for="payment_method">Payment Method</label>
                                                        <select name="payment_method" id="payment_method" class="form-control" required onchange="updateFormAction()">
                                                            <option value="UPI">UPI</option>
                                                            <option value="Cash on delivery">Cash on delivery</option>
                                                            <option value="E-Wallet">E-Wallet</option>
                                                            <option value="PayPal">PayPal</option>
                                                            <option value="Credit Card">Credit Card</option>
                                                            </select>
                                                            <div class="checkout-actions">
                                                                <div class="checkout-action">
                                                                    <button type="submit" name="place_order" class="btn btn-outline-primary-2 btn-order btn-block">
                                                                        <span class="btn-text">Place Order</span>
                                                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                        </aside>
                                                        
                                                        </div>
                                                        
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </main>
                                        </div>
                                    </body>
                                    </html>
                                    