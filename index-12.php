<?php
// Start the session
session_start();



// Now, you can use $_SESSION['username'] for the logged-in user's username
echo "Welcome, " . $_SESSION['username'];  // Display the username
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
<!DOCTYPE html>
<html lang="en">


<!-- molla/index-12.html  22 Nov 2019 09:58:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
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
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/demos/demo-12.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- //include header// -->
    <?php include("./includes/header.php")?>

        <main class="main">
            <div class="intro-slider-container mb-3 mb-lg-5">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-12/slider/slide-1.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">SEASONAL PICKS</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Get All The Good Stuff</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-white">
                                <span>DISCOVER MORE</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner banner-display banner-link-anim banner-title-hidden">
                            <a href="#">
                                <img src="assets/images/demos/demo-12/banners/banner-1.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">This Week's Most Wanted</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="banner banner-display banner-link-anim banner-title-hidden">
                            <a href="#">
                                <img src="assets/images/demos/demo-12/banners/banner-2.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">Bags by Mood</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                        <div class="banner banner-display banner-link-anim banner-title-hidden">
                            <a href="#">
                                <img src="assets/images/demos/demo-12/banners/banner-3.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">The Trend Story</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->

                <div class="mb-3"></div><!-- End .mb-3 -->
            </div><!-- End .container -->

            <div class="bg-lighter pt-5 pb-5 mb-5">
                <div class="container">
                    <div class="heading text-center mb-4">
                        <h2 class="title">Recent Arrivals</h2><!-- End .title -->
                        <p class="title-desc">Aliquam tincidunt mauris eurisus</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true
                                }
                            }
                        }'>
                        
                        
            

        
                        

                    </div><!-- End .owl-carousel -->
                    <div class="products">
        <div class="row justify-content-center">
            <?php
            get_fashion_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter pt-5 pb-5 -->

            <div class="container">
                <div class="heading text-center mb-4">
                    <h2 class="title">Popular Categories</h2><!-- End .title -->
                    <p class="title-desc">Vestibulum auctor dapibus neque</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="banner banner-display banner-link-anim">
                            <a href="#">
                                <img src="assets/images/demos/demo-12/banners/banner-4.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">Accessories</a></h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle text-white"><a href="#">16 Items</a></h4><!-- End .banner-subtitle -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-6 -->

                    <div class="col-sm-6 col-lg-4 order-lg-last">
                        <div class="banner banner-display banner-link-anim">
                            <a href="#">
                                <img src="assets/images/demos/demo-12/banners/banner-5.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">Jewellery</a></h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle text-white"><a href="#">8 Items</a></h4><!-- End .banner-subtitle -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-6 -->

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="banner banner-display banner-link-anim">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-12/banners/banner-6.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-center">
                                        <h3 class="banner-title text-white"><a href="#">Clothing</a></h3><!-- End .banner-title -->
                                        <h4 class="banner-subtitle text-white"><a href="#">24 Items</a></h4><!-- End .banner-subtitle -->
                                        <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6 col-lg-12">
                                <div class="banner banner-display banner-link-anim">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-12/banners/banner-7.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-center">
                                        <h3 class="banner-title text-white"><a href="#">Shoes</a></h3><!-- End .banner-title -->
                                        <h4 class="banner-subtitle text-white"><a href="#">6 Items</a></h4><!-- End .banner-subtitle -->
                                        <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="icon-boxes-container bg-transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rocket"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                        <p>Orders $50 or more</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-rotate-left"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                        <p>Within 30 days</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-info-circle"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                        <p>When you sign up</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-life-ring"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                        <p>24/7 amazing services</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .icon-boxes-container -->
            </div><!-- End .container -->
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
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-12.js"></script>
</body>


<!-- molla/index-12.html  22 Nov 2019 09:58:58 GMT -->
</html>