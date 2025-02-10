<?php
// Start the session
session_start();

// Check if 'username' is set in session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
echo "Welcome, " . $username;  // Display the username or "Guest" if not set
?>


<!-- connection -->
<?php
include('./includes/connect.php');
include('./functions/common_function.php');
include('./functions/10_function.php');

// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;
?>
<!-- cart function call -->
<?php
         cart();
         ?>
<?php include 'chat2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>

<!-- molla/index-11.html  22 Nov 2019 09:58:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EZbuy - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
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
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/demos/demo-11.css">
</head>

<body>
    <div class="page-wrapper">
                <!-- //include header// -->
    <?php include("./includes/header.php")?>

        <main class="main">
            <div class="intro-slider-container mb-4">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "responsive": {
                            "992": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-11/slider/slide-1.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-primary">SEASONAL PICKS</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Get All <br>The Good Stuff</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-primary-2">
                                <span>DISCOVER MORE</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-11/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-primary">all at 50% off</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">The Most Beautiful <br>Novelties In Our Shop</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-primary-2 min-width-sm">
                                <span>SHOP NOW</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <div class="toolbox toolbox-filter">
                    <div class="toolbox-left">
                        <a href="#" class="filter-toggler">Filters</a>

                    </div><!-- End .toolbox-left -->
                    <div class="toolbox-right">
                        <ul class="nav-filter product-filter">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".furniture">Furniture</a></li>
                            <li><a href="#" data-filter=".lighting">Lighting</a></li>
                            <li><a href="#" data-filter=".accessories">Accessories</a></li>
                            <li><a href="#" data-filter=".sale">Sale</a></li>
                        </ul>
                    </div><!-- End .toolbox-right -->
                </div><!-- End .filter-toolbox -->

                <div class="widget-filter-area" id="product-filter-area">
                    <a href="#" class="widget-filter-clear">Clean All</a>

                    <div class="filter-area-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Category:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">All</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">24</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Furniture</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">3</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">
                                                <label class="custom-control-label" for="cat-3">Lighting</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4">
                                                <label class="custom-control-label" for="cat-4">Accessories</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">4</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-5">
                                                <label class="custom-control-label" for="cat-5">Sale</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Sort by:
                                    </h3><!-- End .widget-title -->

                                    
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Price:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .filter-area-wrapper -->
                </div><!-- End #product-filter-area.widget-filter-area -->
                
                <div class="products-container" data-layout="fitRows">
                    <div class="product-item furniture">
                    <div class="products">
        <div class="row justify-content-center">
            <?php
            get_furniture_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                    </div><!-- End .product-item -->

                    <div class="product-item lighting">
                    <div class="products">
        <div class="row justify-content-center">
            <?php
            get_furniture_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                    </div><!-- End .product-item -->

                    
                </div><!-- End .products-container -->
            </div><!-- End .container -->

            <div class="more-container text-center mt-0 mb-7">
                <a href="category.html" class="btn btn-outline-dark-3 btn-more"><span>more products</span><i class="la la-refresh"></i></a>
            </div><!-- End .more-container -->
        </main><!-- End .main -->

        <!-- //include footer// -->
        <?php include("./includes/footer.php")?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/popup/newsletter/EZbuy.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the EZbuy eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-11.js"></script>
</body>


<!-- molla/index-11.html  22 Nov 2019 09:58:42 GMT -->



</html>