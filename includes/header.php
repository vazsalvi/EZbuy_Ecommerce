<!-- Inside header.php -->

<!-- jQuery (Required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

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
    <link rel="apple-touch-icon" sizes="180x180" href="\Ai_driven_ecommerce\assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="\Ai_driven_ecommerce\assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="\Ai_driven_ecommerce\assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="\Ai_driven_ecommerce\assets/images/icons/site.html">
    <link rel="mask-icon" href="\Ai_driven_ecommerce\assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="\Ai_driven_ecommerce\assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="\Ai_driven_ecommerce\assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/style.css">
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="\Ai_driven_ecommerce\assets/css/demos/demo-4.css">

    <style>
        .icon-user {
    transform: scale(2.2); /* Increase size */
    display: inline-block; /* Ensures it scales properly */
    margin: 0 10px; /* Adds spacing on both left and right */
}

    </style>
</head>


<header class="header">
    <!-- In header.php -->
    <?php
// Setting the include path to make sure it includes the correct directories
set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\Ai_driven_ecommerce\includes');

// Including signuplogin.php file
include 'signuplogin.php'; 

// Including the rest of your header content
?>

            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">Usd</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                    <li><a href="users_area/wishlist.php"><i class="icon-heart-o"></i>Wishlist </a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    
                                    
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
<<<<<<< Updated upstream
                            <img src="\Ai_driven_ecommerce\assets\images\logo.png" alt="Molla Logo" width="105" height="25">
=======
                            <img src="\Ai_driven_ecommerce\assets\images\EZbuy.png" alt="Molla Logo" width="105" height="25">

>>>>>>> Stashed changes
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.php" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="index-4.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                        <span class="demo-title">04 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                
                                                <div class="demo-item">
                                                    <a href="index-10.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                        <span class="demo-title">10 - shoes store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-11.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                        <span class="demo-title">11 - furniture simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-12.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                        <span class="demo-title">12 - fashion simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                
                                                <div class="demo-item hidden">
                                                    <a href="index-19.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                        <span class="demo-title">19 - games store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-20.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                        <span class="demo-title">20 - book store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-21.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                        <span class="demo-title">21 - sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                
                                                <div class="demo-item hidden">
                                                    <a href="index-24.php">
                                                        <span class="demo-bg" style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                        <span class="demo-title">24 - extreme sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="about.php" >About</a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="faq.php">FAQs</a></li>
                                        <li><a href="404.php">Error 404</a></li>
                                        <li><a href="coming-soon.php">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.php" >Blog</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="users_area\category.php" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <sup class="cart-count"><?php cart_item();?></sup>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                <?php

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch cart items for the current user
$get_ip_add = getUserIP();
$cart_query = "SELECT * FROM cart_details WHERE ip_address='$get_ip_add'";
$result = mysqli_query($con, $cart_query);
$total_cart_price = 0; // Grand total

while ($row = mysqli_fetch_assoc($result)) {
    $product_id = $row['product_id'];
    $quantity = $row['quantity'];

    // Fetch product details
    $product_query = "SELECT * FROM products WHERE product_id='$product_id'";
    $product_result = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_assoc($product_result);

    $product_title = $product_data['product_title'];
    $product_image = $product_data['product_image1'];
    $product_price = $product_data['product_price'];
    $total_price = $product_price * $quantity;
    $total_cart_price += $total_price;

    echo '
    <div class="product">
        <div class="product-cart-details">
            <h4 class="product-title">
                <a href="product.php?product_id=' . $product_id . '">' . $product_title . '</a>
            </h4>
            <span class="cart-product-info">
                <span class="cart-product-qty">' . $quantity . '</span> x $' . $product_price . '
            </span>
        </div><!-- End .product-cart-details -->

        <figure class="product-image-container">
            <a href="product.php?product_id=' . $product_id . '" class="product-image">
                <img src="/Ai_driven_ecommerce/admin_area/product_images/' . $product_image . '" alt="' . $product_title . '">
            </a>
        </figure>
        
        <a href="remove_cart.php?remove_id=' . $product_id . '" class="btn-remove" title="Remove Product">
            <i class="icon-close"></i>
        </a>
    </div><!-- End .product -->
    ';
}
?>

                                   
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price"><?php total_cart_price(); ?></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="users_area/cart.php" class="btn btn-primary">View Cart</a>
                                    <a href="users_area/checkout.php" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                        <div class="account">
                            <a href="users_area/dashboard.php" title="My account">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                            </a>
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->