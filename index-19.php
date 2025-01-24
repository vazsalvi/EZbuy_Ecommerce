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

// $user_ip = getUserIP();
// echo "User IP Address: " . $user_ip;
?>
<!-- cart function call -->
<?php
         cart();
         ?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/index-19.html  22 Nov 2019 10:00:58 GMT -->
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-19.css">
    <link rel="stylesheet" href="assets/css/demos/demo-19.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrap-container">
            <!-- //include header// -->
    <?php include("./includes/header.php")?>
        </div>
        <div class="wrap-container">   
            <main class="main">
                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="container">
                    <div class="row">
                        

                        <div class="col-lg-8 col-xl-6">
                            <div class="banner banner-overlay banner-lg  content-left">
                                <a href="#">
                                    <img src="assets/images/demos/demo-19/banners/banner-1.jpg" alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle">Pre-order now</h4>
                                    <img src="assets/images/demos/demo-19/banners/banner-1-title.png" alt="Banner 1 Title" width="217" height="54" class="mb-1">
                                    <a href="#" class="banner-link size-lg">Pre-Order Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="banner banner-overlay banner-sm content-right">
                                <a href="#">
                                    <img src="assets/images/demos/demo-19/banners/banner-2.jpg" alt="Banner">
                                </a>
                                <div class="banner-content text-right">
                                    <h4 class="banner-subtitle">Weekend Offer</h4>
                                    <img class="banner-title-img" src="assets/images/demos/demo-19/banners/banner-2-title.png" alt="Banner-2">
                                    <h4 class="banner-price">Save<span class="price">$19,99</span></h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay d-none d-lg-block banner-sm content-right align-center">
                                <a href="#">
                                    <img src="assets/images/demos/demo-19/banners/banner-3.jpg" alt="Banner">
                                </a>
                                <div class="banner-content text-right">
                                    <img class="banner-title-img" src="assets/images/demos/demo-19/banners/banner-3-title.png" alt="Banner-3">
                                    <h5 class="text-white">35% OFF</h5>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div> 
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="banner banner-overlay banner-sm content-right align-center">
                                <a href="#">
                                    <img src="assets/images/demos/demo-19/banners/banner-4.jpg" alt="Banner">
                                </a>
                                <div class="banner-content" style="left: auto; right: 3rem; align-items: flex-start;">
                                    <h4 class="banner-subtitle">Weekend Sale</h4>
                                    <img class="banner-title-img" src="assets/images/demos/demo-19/banners/banner-4-title.png" alt="Banner-4">
                                    <h4 class="banner-price"><span class="off">25% off</span></h4>
                                    <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="banner banner-overlay banner-lg">
                                <a href="#">
                                    <img src="assets/images/demos/demo-19/banners/banner-5.jpg" alt="Banner">
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle">Amazing Value</h4>
                                    <img class="banner-title-img mb-1" src="assets/images/demos/demo-19/banners/banner-5-title.png" alt="Banner-5">
                                    <a href="#" class="banner-link">Pre-Order Now<i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="icon-boxes-container icon-boxes-separator bg-transparent">
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

                
                <div class="container">
                    <div class="heading heading-flex mb-2">
                        <div class="heading-left">
                            <h2 class="title mb-5">Consoles & Accessories</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="category.html" class="title-link">View more products <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
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
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        
                    </div><!-- End .owl-carousel -->
                    <div class="products">
        <div class="row justify-content-center">
            <?php
            getproducts();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="bg-light pt-3 pb-5 mb-5">
                    <div class="container">
                        <ul class="nav nav-pills nav-big nav-border-anim justify-content-center mb-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="products-trending-link" data-toggle="tab" href="#products-trending-tab" role="tab" aria-controls="products-trending-tab" aria-selected="true">Now Trending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-new-link" data-toggle="tab" href="#products-new-tab" role="tab" aria-controls="products-new-tab" aria-selected="false">New Releases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="products-best-link" data-toggle="tab" href="#products-best-tab" role="tab" aria-controls="products-best-tab" aria-selected="false">Best-Rated</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="products-trending-tab" role="tabpanel" aria-labelledby="products-trending-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
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
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    
                                </div><!-- End .owl-carousel -->
                                <div class="products">
        <div class="row justify-content-center">
            <?php
            getproducts();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-new-tab" role="tabpanel" aria-labelledby="products-new-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
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
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    
                                </div><!-- End .owl-carousel -->
                                <div class="products">
        <div class="row justify-content-center">
            <?php
            getproducts();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="products-best-tab" role="tabpanel" aria-labelledby="products-best-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
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
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    
                                </div><!-- End .owl-carousel -->
                                <div class="products">
        <div class="row justify-content-center">
            <?php
            getproducts();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
    </div><!-- End .products -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light pt-4 pb-4 -->

                <div class="container">
                    <hr class="mt-0 mb-4">
                </div><!-- End .container -->
                
                <div class="container">
                    <div class="heading heading-flex mb-2 mb-lg-3">
                        <div class="heading-left">
                            <h2 class="title mb-0">Games Coming Soon</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <a href="category.html" class="title-link">View more products <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="games-soon">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="products">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-6.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Tom Clancy’s <br>Ghost Recon Wildlands</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $49.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-7.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Sport</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">NBA 2K19 450,000 VC</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $74.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-8.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">STAR WARS Battlefront II</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $24.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-9.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Shooter</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Call of Duty: Black Ops 4 Spectre Rising Edition</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $39.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-10.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>Pre-order Now</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Role playing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Diablo III: <br>Eternal Collection</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $19.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->

                                        <div class="col-6 col-md-4">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-19/products/product-11.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Role playing</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Tom Clancy's <br>The Division 2</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $24.99
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .products -->
                            </div><!-- End .col-lg-7 -->

                            <div class="col-lg-5 order-lg-first">
                                <div class="games-banners-slider owl-carousel owl-simple" data-toggle="owl" 
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 0,
                                        "loop": false,
                                        "items":1
                                    }'>
                                    <div class="banner banner-overlay product-banner">
                                        <a href="#">
                                            <img src="assets/images/demos/demo-19/banners/banner-9.jpg" alt="Banner">
                                        </a>
                                        <div class="banner-content align-items-center center">
                                            <img class="banner-title-img mb-1" src="assets/images/demos/demo-19/banners/banner-9-title.png" alt="Banner-9">
                                            <h4 class="banner-price mb-2" style="font-weight: 600;">$29.99</h4>
                                            
                                        </div>
                                    </div><!-- End .banner -->

                                    <div class="banner banner-overlay product-banner">
                                        <a href="#">
                                            <img src="assets/images/demos/demo-19/banners/banner-10.jpg" alt="Banner">
                                        </a>
                                        <div class="banner-content align-items-center">
                                            <h4 class="banner-subtitle" style="letter-spacing: 0.1em;">Out 14 May 2019</h4>
                                            <img class="banner-title-img mb-1" src="assets/images/demos/demo-19/banners/banner-10-title.png" alt="Banner-10">
                                            
                                        </div>
                                    </div><!-- End .banner -->

                                </div><!-- End .owl-carousel -->
                            </div><!-- End .col-lg-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .games-soon -->
                </div><!-- End .container -->

                <div class="mb-3"></div><!-- End .mb-3 -->



            </main><!-- End .main -->

                    <!-- //include footer// -->
        <?php include("./includes/footer.php")?>
        </div><!-- End .wrap-container -->  
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  

    


    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
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
    <script src="assets/js/demos/demo-19.js"></script>
</body>


<!-- molla/index-19.html  22 Nov 2019 10:01:15 GMT -->
</html>