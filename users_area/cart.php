<?php
// Start the session
session_start();



// Now, you can use $_SESSION['username'] for the logged-in user's username
echo "Welcome, " . $_SESSION['username'];  // Display the username
?>

<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<?php include 'chat2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
<head>
<base href="/Ai_driven_ecommerce/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/icons/site.html">
    <link rel="mask-icon" href="../assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="../assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="../assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .custom-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: 100px;
}
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- //include header// -->
    <?php include("../includes/header.php")?>




        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="custom-row"><?php

                        // Handle product removal
if (isset($_POST['remove_product'])) {
    $remove_id = $_POST['remove_id'];
    $get_ip_add = getUserIP();  // Get the user's IP address

    // Delete only the product belonging to the current IP address
    $delete_query = "DELETE FROM cart_details WHERE product_id='$remove_id' AND ip_address='$get_ip_add'";
    $result = mysqli_query($con, $delete_query);

    if ($result) {
        echo "<script>window.location.href='users_area/cart.php';</script>"; // Refresh the page after removal
        exit();
    } else {
        echo "<script>alert('Error removing item!');</script>";
    }
}
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user IP address
$get_ip_add = getUserIP();

// Fetch cart details for the current user
$cart_query = "SELECT c.product_id, c.quantity, 
                      p.product_title, p.product_image1, p.product_price
               FROM cart_details c
               JOIN products p ON c.product_id = p.product_id
               WHERE c.ip_address = '$get_ip_add'";

$result = mysqli_query($con, $cart_query);

// Update cart quantities if form is submitted
if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $product_id => $new_quantity) {
        $new_quantity = (int) $new_quantity;

        // Update the quantity in the cart
        $update_query = "UPDATE cart_details SET quantity = '$new_quantity' WHERE product_id = '$product_id' AND ip_address = '$get_ip_add'";
        mysqli_query($con, $update_query);
    }
    echo "<script>window.location.href='users_area/cart.php';</script>";
    exit();
}


?>

<form action="" method="post">
    <div class="row">
        <div class="col-lg-9">
            <table class="table table-cart table-mobile">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
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
                                                <img src='/Ai_driven_ecommerce/admin_area/product_images/$product_image' alt='$product_title'>
                                            </a>
                                        </figure>
                                        <h3 class='product-title'>
                                            <a href='product.php?product_id=$product_id'>$product_title</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class='price-col'>Rs $product_price</td>
                                <td class='quantity-col'>
                                    <div class='cart-product-quantity'>
                                        <input type='number' class='form-control update-quantity' name='quantity[$product_id]' data-product-id='$product_id' value='$product_quantity' min='1' max='10' step='1' required>
                                    </div>
                                </td>
                                <td class='total-col' id='total_$product_id'>Rs $total_price</td>
                                <td class='remove-col'>
                                    '<td class='remove-col'>
    <form method='post'>
        <input type='hidden' name='remove_id' value='".$product_id."'>
        <button type='submit' name='remove_product' class='btn-remove'>
            <i class='icon-close'></i>
        </button>
    </form>
</td>

                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table><!-- End .table table-cart -->

            <div class="cart-bottom">
                <div class="cart-discount">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" required placeholder="coupon code">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div><!-- End .cart-discount -->

                <button type="submit" name="update_cart" class="btn btn-outline-dark-2">
                    <span>UPDATE CART</span><i class="icon-refresh"></i>
                </button>
            </div><!-- End .cart-bottom -->
        </div><!-- End .col-lg-9 -->

        <aside class="col-lg-3">
            <div class="summary summary-cart">
                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                <table class="table table-summary">
                    <tbody>
                        <tr class="summary-subtotal">
                            <td>Subtotal:</td>
                            <td><?php total_cart_price(); ?></td>
                        </tr><!-- End .summary-subtotal -->
                        <tr class="summary-shipping">
                            <td>Shipping:</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr class="summary-shipping-row">
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                    <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                </div><!-- End .custom-control -->
                            </td>
                            <td>Rs 0.00</td>
                        </tr><!-- End .summary-shipping-row -->

                        <tr class="summary-shipping-row">
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                    <label class="custom-control-label" for="standart-shipping">Standard:</label>
                                </div><!-- End .custom-control -->
                            </td>
                            <td>Rs 10.00</td>
                        </tr><!-- End .summary-shipping-row -->

                        <tr class="summary-shipping-row">
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                    <label class="custom-control-label" for="express-shipping">Express:</label>
                                </div><!-- End .custom-control -->
                            </td>
                            <td>Rs 20.00</td>
                        </tr><!-- End .summary-shipping-row -->

                        <tr class="summary-shipping-estimate">
                            <td>Estimate for Your Country<br> <a href="users_area/dashboard.php">Change address</a></td>
                            <td>&nbsp;</td>
                        </tr><!-- End .summary-shipping-estimate -->

                        <tr class="summary-total">
                            <td>Total:</td>
                            <td>Rs 160.00</td>
                        </tr><!-- End .summary-total -->
                    </tbody>
                </table><!-- End .table table-summary -->
    
                <a href="users_area/checkout.php" id="checkout-btn" class="btn btn-outline-primary-2 btn-order btn-block">
    PROCEED TO CHECKOUT
</a>

<script>
document.getElementById('checkout-btn').addEventListener('click', function(event) {
    <?php if (isset($_SESSION['username'])) { ?>
        window.location.href = 'checkout.php'; // Redirect to checkout if logged in
    <?php } else { ?>
        event.preventDefault(); // Stop default behavior
        document.querySelector('a[href="#signin-modal"]').click(); // Simulate login button click
    <?php } ?>
});
</script>



            </div><!-- End .summary -->

            <form method="post">
    <button type="submit" name="continue_shopping" class="btn btn-outline-dark-2 btn-block mb-3">
        <span>CONTINUE SHOPPING</span>
        <i class="icon-refresh"></i>
    </button>
</form>

<?php
if (isset($_POST['continue_shopping'])) {
    echo "<script>window.open('category.php','_self')</script>";
}
?>
        </aside><!-- End .col-lg-3 -->
    </div><!-- End .row -->
</form><!-- End form -->

	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <!-- //include footer// -->
        <?php include("../includes/footer.php")?>

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>



        <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>
        
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home</a>

                    <ul>
                        <li><a href="index-1.html">01 - furniture store</a></li>
                        <li><a href="index-2.html">02 - furniture store</a></li>
                        <li><a href="index-3.html">03 - electronic store</a></li>
                        <li><a href="index-4.html">04 - electronic store</a></li>
                        <li><a href="index-5.html">05 - fashion store</a></li>
                        <li><a href="index-6.html">06 - fashion store</a></li>
                        <li><a href="index-7.html">07 - fashion store</a></li>
                        <li><a href="index-8.html">08 - fashion store</a></li>
                        <li><a href="index-9.html">09 - fashion store</a></li>
                        <li><a href="index-10.html">10 - shoes store</a></li>
                        <li><a href="index-11.html">11 - furniture simple store</a></li>
                        <li><a href="index-12.html">12 - fashion simple store</a></li>
                        <li><a href="index-13.html">13 - market</a></li>
                        <li><a href="index-14.html">14 - market fullwidth</a></li>
                        <li><a href="index-15.html">15 - lookbook 1</a></li>
                        <li><a href="index-16.html">16 - lookbook 2</a></li>
                        <li><a href="index-17.html">17 - fashion store</a></li>
                        <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                        <li><a href="index-19.html">19 - games store</a></li>
                        <li><a href="index-20.html">20 - book store</a></li>
                        <li><a href="index-21.html">21 - sport store</a></li>
                        <li><a href="index-22.html">22 - tools store</a></li>
                        <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                        <li><a href="index-24.html">24 - extreme sport store</a></li>
                    </ul>
                </li>
                <li>
                    <a href="category.html">Shop</a>
                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html" class="sf-with-ul">Product</a>
                    <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="product-centered.html">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li>
                            <a href="about.html">About</a>

                            <ul>
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>

                            <ul>
                                <li><a href="contact.html">Contact 01</a></li>
                                <li><a href="contact-2.html">Contact 02</a></li>
                            </ul>
                        </li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>

                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Post</a>
                            <ul>
                                <li><a href="single.html">Default with sidebar</a></li>
                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="elements-list.html">Elements</a>
                    <ul>
                        <li><a href="elements-products.html">Products</a></li>
                        <li><a href="elements-typography.html">Typography</a></li>
                        <li><a href="elements-titles.html">Titles</a></li>
                        <li><a href="elements-banners.html">Banners</a></li>
                        <li><a href="elements-product-category.html">Product Category</a></li>
                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                        <li><a href="elements-buttons.html">Buttons</a></li>
                        <li><a href="elements-accordions.html">Accordions</a></li>
                        <li><a href="elements-tabs.html">Tabs</a></li>
                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                        <li><a href="elements-cta.html">Call to Action</a></li>
                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
</html>