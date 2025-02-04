<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    header("Location: admins_login.php"); // Redirect to the login page or any other page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h4>Welcome, <?php echo $_SESSION['admin_name']; ?>!</h4>
    <!-- Rest of your admin dashboard content -->
</body>

</html>

<?php
include('../includes/connect.php');
include('../functions/common_function.php');

// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="EZbuy - Bootstrap eCommerce Template">
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
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="../assets/css/demos/demo-4.css">

    <style>
    .admin_image {
        width: 100px;
        object-fit: contain;
    }
    .header-bottom.sticky-header {
    height: 50px; /* Adjust this value as needed */
    padding: 10px 0; /* Adjust the padding as needed */
    display: flex;
    align-items: center; /* Vertically center the content */
}

.header-bottom.sticky-header .container {
    display: flex;
    align-items: center; /* Vertically center the content */
}

.header-bottom.sticky-header .logo img {
    max-height: 100%; /* Ensure the image fits within the header */
    height: auto;
}

    </style>
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                    <li><a href="#">Tamil</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li><a href="/Ai_driven_ecommerce/admin_area/admins_registration.php" >Sign in / Sign up</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
                            <img src="../assets/images/demos/demo-20/EZbuy.png" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->


                    <div class="header-right">


                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom sticky-header -->

        </header><!-- End .header -->

        <!-- .Second child -->
        <div>

            <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
            </div>
        </div>
        <!--End .Second child -->

        <!--third-child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../assets/images/team/member-2.jpg." alt="" class=admin_image></a>
                    <p class="text=light text-center">Admin name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
                    <button class="my-3"><a href="index.php?view_products"class="nav-link text-light bg-info my-1">View Product</a></button>
                    <button class="my-3"><a href="index.php?insert_categories"class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class="my-3"><a href="index.php?view_categories"class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="my-3"><a href="index.php?insert_brands"class="nav-link text-light bg-info my-1">Insert brands</a></button>
                    <button class="my-3"><a href="index.php?view_brands"class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class="my-3"><a href="index.php?insert_websites"class="nav-link text-light bg-info my-1">Insert website</a></button>
                    <button class="my-3"><a href="index.php?view_websites"class="nav-link text-light bg-info my-1">View website</a></button>
                    <button class="my-3"><a href="index.php?all_orders"class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button class="my-3"><a href="index.php?all_payments"class="nav-link text-light bg-info my-1">AllPayments</a></button>
                    <button class="my-3"><a href="index.php?list_users"class="nav-link text-light bg-info my-1">List User</a></button>
                    <button class="my-3"><a href="#" class="nav-link text-light bg-info my-1" onclick="return confirmLogout()">Logout</a></button>
                    
                </div>
            </div><!--End .col-md-12 bg-secoundary p-1-->
        </div><!--End .third-child-->
       
        <!-- .Fourth child -->
         <div class="container my-3">
            <?php
            if(isset($_GET['insert_categories'])){
                include("insert_categories.php");
            }
            if(isset($_GET['insert_brands'])){
                include("insert_brands.php");
            }
            if(isset($_GET['view_products'])){
                include("view_products.php");
            }
            if(isset($_GET['edit_products'])){
                include("edit_products.php");
            }
            if(isset($_GET['view_categories'])){
                include("view_categories.php");
            }
            if(isset($_GET['view_brands'])){
                include("view_brands.php");
            }
            if(isset($_GET['insert_websites'])){
                include("insert_websites.php");
            }
            if(isset($_GET['view_websites'])){
                include("view_websites.php");
            }
            if(isset($_GET['all_orders'])){
                include("all_orders.php");
            }
            if(isset($_GET['all_payments'])){
                include("all_payments.php");
            }
            if(isset($_GET['list_users'])){
                include("list_users.php");
            }
            ?>
         </div>


    </div><!-- End .page-wrapper -->

    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2019 EZbuy Store. All Rights Reserved.</p>
                <!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="../assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</body>
<script>
        function confirmLogout() {
            if (confirm("Are you sure you want to log out?")) {
                window.location.href = "?action=logout";
            }
            return false; // Prevent default link behavior
        }
    </script>

</html>
