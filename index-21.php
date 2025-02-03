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
<html>

<!-- molla/index-21.html  22 Nov 2019 10:01:31 GMT -->
<head>
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="assets/css/skins/skin-demo-21.css">
    <link rel="stylesheet" href="assets/css/demos/demo-21.css">

</head>
<body>
    <div class="page-wrapper">
        <div class="notification" style="background-image: url(assets/images/demos/demo-21/notification-back.jpg)">
            <div class="notify-content">
                <h3>FREE SHIPPING FOR ALL ORDERS OVER $50</h3>
            </div>
            <div class="notify-action">
                <a href="#"><i class="icon-close"></i></a>
            </div>
        </div>
                        <!-- //include header// -->
    <?php include("./includes/header.php")?>

        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": false,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-21/slider/slide-1.png);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="intro">
                                    <div class="title">
                                        <h3>WOMEN'S</h3>
                                    </div>
                                    <div class="content">
                                        <h3>RUNNING &</h3>
                                        <h3>TRAINING SHIRTS</h3>
                                    </div>
                                    <div class="price">
                                        <h3>SAVE UP TO 30%</h3>
                                        </div>
                                    <div class="action">
                                        <a href="category.html" class="btn btn-primary">
                                            <span>DISCOVER NOW</span>
                                        </a>
                                    </div>

                                </div>
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-21/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="intro">
                                    <div class="title">
                                        <h3 class="darkWhite">DEAL OF THE DAY</h3>
                                    </div>
                                    <div class="content">
                                        <h3>IT'S TIME TO UPGRADE<br>YOUR HIKING KIT</h3>
                                    </div>
                                    <div class="price">
                                        <h3 class="darkWhite">SAVE UP TO 15%</h3>
                                    </div>
                                    <div class="action">
                                        <a href="category.html" class="btn btn-primary">
                                            <span>DISCOVER NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->


                    
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->


            <div class="container banner-container">
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category.html">
                        <img src="assets/images/demos/demo-21/banner/banner-1.jpg">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category.html"><h3 class="darkWhite">It's a lifestyle.</h3></a>
                        </div>
                        <div class="content">
                            <a href="category.html"><h3>Running Apparel</h3></a>
                            <a href="category.html"><h3>END OF SEASON SALE</h3></a>
                        </div>
                        <div class="action">
                            <a href="category.html" class="btn btn-demoprimary">
                                <span>SHOP NOW</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End .row -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category.html">
                        <img src="assets/images/demos/demo-21/banner/banner-2.jpg">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category.html"><h3 class="darkWhite">Hike Your Next Trail </h3></a>
                        </div>
                        <div class="content">
                            <a href="category.html"><h3>NEW SEASON</h3></a>
                            <a href="category.html"><h3>NEW GEAR</h3></a>
                        </div>
                        <div class="action">
                            <a href="category.html" class="btn btn-demoprimary">
                                <span>DISCOVER NOW</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End .row -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category.html">
                        <img src="assets/images/demos/demo-21/banner/banner-3.jpg">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category.html"><h3 class="darkWhite">Summer Sale</h3></a>
                        </div>
                        <div class="content">
                            <a href="category.html"><h3>Swimwear sale</h3></a>
                            <a href="category.html"><h3>Save up to 30%</h3></a>
                        </div>
                        <div class="action">
                            <a href="category.html" class="btn btn-demoprimary">
                                <span>SHOP NOW</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End .row -->
                </div>
            </div>

            <div class="container bestsellers">
                <hr class="mb-3">
                <div class="heading">
                    <h2 class="title text-center">BEST SELLERS</h2>
                    <p class="content text-center mb-4">The Trends Boutique: The latest fashion trends from top brands!</p>
                </div>

                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Nike Renew Arena</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$58.99</span>
                                <span class="old-price">Was $75.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #c12f46;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #d3def0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                            </div><!-- End .product-action -->


                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-21/bestSellers/product-2-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-2-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Jackets & Vests</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Advanced Skin 12 Set</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots" style="visibility: hidden;">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-21/bestSellers/product-3-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-3-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Tops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">On Performance-T Shirt</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$99.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #5a7399;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-21/bestSellers/product-4-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-4-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Bottoms</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">CB Carbon 2 Cycling Short</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$159.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                            <div class="product-nav product-nav-dots" style="visibility: hidden;">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Tops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">On Performance-T Shirt</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$99.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #5a7399;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                </div><!-- End .owl-carousel -->
            </div>
            

            <div class="container new-arrivals">

                <hr class="mb-5 mt-8">

                <div class="heading heading-center mb-3">
                    <h2 class="title">NEW ARRIVALS </h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="arrivals-all-link" data-toggle="tab" href="#arrivals-all-tab" role="tab" aria-controls="arrivals-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-women-link" data-toggle="tab" href="#arrivals-women-tab" role="tab" aria-controls="arrivals-women-tab" aria-selected="false">Cricket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-men-link" data-toggle="tab" href="#arrivals-men-tab" role="tab" aria-controls="arrivals-men-tab" aria-selected="false">Football</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-shoes-link" data-toggle="tab" href="#arrivals-shoes-tab" role="tab" aria-controls="arrivals-shoes-tab" aria-selected="false">Bags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab" aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel" aria-labelledby="arrivals-all-link">
                        <div class="row">
                        <div class="products">
        <div class="row justify-content-center">
            <?php
            get_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                        </div>
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="arrivals-women-tab" role="tabpanel" aria-labelledby="arrivals-women-link">
                        <div class="row">
                        <div class="products">
        <div class="row justify-content-center">
            <?php
            get_cricket_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-men-tab" role="tabpanel" aria-labelledby="arrivals-men-link">
                        <div class="row">
                        <div class="products">
        <div class="row justify-content-center">
            <?php
            get_football_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-shoes-tab" role="tabpanel" aria-labelledby="arrivals-shoes-link">
                        <div class="row">
                        <div class="products">
        <div class="row justify-content-center">
            <?php
            get_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-acc-tab" role="tabpanel" aria-labelledby="arrivals-acc-link">
                        <div class="row">
                        <div class="products">
        <div class="row justify-content-center">
            <?php
            get_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->

                        </div>
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

                <div class="text-center">
                    <a href="category.html" class="btn btn-viewMore">
                        <span>VIEW MORE PRODUCTS</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div><!-- End .container -->

            <div class="container service mt-4">
                <div class="col-sm-6 col-lg-3 col-noPadding">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-truck"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment &amp; Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
                
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return &amp; Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-envelope"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">JOIN OUR NEWSLETTER</h3><!-- End .icon-box-title -->
                            <p>10% off by subscribing to our newsletter</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
            </div>

        </main>

        <!-- //include footer// -->
        <?php include("./includes/footer.php")?>


        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


    </div>
    
    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
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
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-21.js"></script>
</body>

<!-- molla/index-21.html  22 Nov 2019 10:01:54 GMT -->
</html>