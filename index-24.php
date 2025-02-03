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

<!-- molla/index-24.html  22 Nov 2019 10:02:28 GMT -->
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
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-24.css">
    <link rel="stylesheet" href="assets/css/demos/demo-24.css">

</head>
<body>
 <!-- //include header// -->
 <?php include("./includes/header.php")?>
	<div class="mb-5"></div><!-- End .mb-5 -->
	<div class="page-wrapper">


		
		<main class="main">
		<div class="background" style="background-image: url(assets/images/demos/demo-24/slider/23back-11.jpg);">
			
	        <div class="slider">
	        	<div class="intro">
	        		<div class="title">
	        			<h3>Premium Outdoor Gear & Clothing</h3>
	        		</div>
	        		<div class="content">
	        			<h4><i>Our New Collections 2019</i></h4>
	        			<h5>Ski & Snowboard</h5>
	        		</div>
	        		<div class="action">
	        			<a href="category.html">discover now</a>
	        		</div>
	        	</div>
	        	<img src="assets/images/demos/demo-24/slider/back-2.png" alt="Outdoor Gear">
	        </div>
		</div>
			<section class="logos">
				<div class="container">
					<hr class="mb-4">
					
				</div>
            </section><!-- End .container -->

            <section class="banners center">
            	<div class="container">
            		<div class="row">
            			<div class="banner col-lg-4 col-md-6 col-sm-6">
	            			<img src="assets/images/demos/demo-24/banners/banner-1.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>Online mega deal</h3>
	            				</div>
	            				<div class="content">
	            					<h4>Camping Gear<br>& Accessories</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	            		</div>

	            		<div class="banner percent col-lg-4 col-md-6 col-sm-6">
	            			<img src="assets/images/demos/demo-24/banners/banner-2.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>Summer</h3>
	            					<h4>Clearance</h4>
	            				</div>
	            				<div class="img-percent">
	            					<img src="assets/images/demos/demo-24/banners/percent.png" width="190" height="75">
	            				</div>
	            				<div class="content">
	            					<h4>* Donec sit amet vulputate<br> velit.Aenean tempus nisl</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Discover Now</a>
	            				</div>
	            			</div>
	            		</div>

	            		<div class="banner col-lg-4  col-md-6 col-sm-6">
	            			<img src="assets/images/demos/demo-24/banners/banner-3.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>Lightning Deals</h3>
	            				</div>
	            				<div class="content">
	            					<h4>Sports &<br>Outdoors</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	            		</div>
            		</div>
            	</div>
            </section>



			
			

            <section class="best-sellers">
            	<div class="container">
            		<div class="heading">
	            		<p class="heading-cat">favourite from every category</p>
	            		<h3 class="heading-title">Best Sellers</h3>
	            	</div>
		            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow text-center" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "768": {
                            	"items":3
                            },
                            "992": {
                                "items":3
                            },
                            "1200": {
                            	"items":4
                            }
                        }
                    }'> 
					
				</div>
				<div class="row justify-content-center">
            <?php
            get_extreme_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
					
					</div>
        
					
        
    
        
	                    
	                
            </section>

            <section class="banners stretch mt-2">
            	<div class="container">
	            <div class="row">
	            	<div class="col-lg-6 col-md-6 col-12 banner-lg">
	        			<img src="assets/images/demos/demo-24/banners/banner-4.jpg">
	        			<div class="intro">
	        				<div class="title">
	        					<h3><i>Trending</i></h3>
	        				</div>
	        				<div class="content">
	        					<h4>Camping & Hiking</h4>
	        					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>Donec odio. Quisque volutpat mattis eros.</p>
	        				</div>
	        				<div class="action">
	        					<a href="category.html">Discover Now</a>
	        				</div>
	        			</div>
	        		</div>
	        		<div class="col-lg-6 col-md-6 col-12 banner-sm-div">
	        			<div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-black">
	        				<img src="assets/images/demos/demo-24/banners/banner-5.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>Women's</h3>
	            				</div>
	            				<div class="content">
	            					<h4>Active &<br> Fitness</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-white">
	        				<img src="assets/images/demos/demo-24/banners/banner-6.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>New Arrivals</h3>
	            				</div>
	            				<div class="content">
	            					<h4>Deepest discount<br> of the season</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-white">
	        				<img src="assets/images/demos/demo-24/banners/banner-7.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>men's</h3>
	            				</div>
	            				<div class="content">
	            					<h4>Surf Gear &<br>Accessories</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6 banner-sm font-black">
	        				<img src="assets/images/demos/demo-24/banners/banner-8.jpg">
	            			<div class="intro">
	            				<div class="title">
	            					<h3>men's</h3>
	            				</div>
	            				<div class="content">
	            					<h4>outerwear<br>collection</h4>
	            				</div>
	            				<div class="action">
	            					<a href="category.html">Shop Now</a>
	            				</div>
	            			</div>
	        			</div>
	        		</div>
	            </div>
	            </div>
            </section>

            <section class="featured-products">
            	<div class="container">
            		<div class="heading">
	            		<p class="heading-cat">Featured Products </p>
	            		<h3 class="heading-title">Featured Products</h3>
	            	</div>
	            	<div class="row">
					
        <div class="row justify-content-center">
            <?php
            get_extreme_sport_products();
            get_unique_categories();
            get_unique_brands()
            ?>

        </div><!-- End .row -->
	            		
	            	
	            </div>
            </section>
            <section class="video-banner">
            	<img src="assets/images/demos/demo-24/video-banner/banner.jpg">

            	<div class="intro video">
            		<div class="title">
            			<h3><i>Spring / Summer</i></h3>
            		</div>
            		<div class="content">
            			<h4>New & Stylish<br>Collection 2019</h4>
            		</div>
            		<div class="action">
            			<a href="https://www.youtube.com/watch?v=YbJOTdZBX1g" class="btn-iframe"><i class="icon-play"></i></a>
            		</div>
            	</div>
            </section>

		</main>

		
			
        <!-- //include footer// -->
        <?php include("./includes/footer.php")?>
		
    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

	<div class="mobile-menu-overlay">
    </div><!-- End .mobil-menu-overlay -->
    <div class="mobile-menu-container mobile-menu-light">
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
                        <a href="index.html">HOME</a>

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
                        <a href="category.html">SHOP</a>
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
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">ABOUT US</a>

                        <ul>
                            <li><a href="about.html">About 01</a></li>
                            <li><a href="about-2.html">About 02</a></li>
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
                        <a href="contact.html">CONTACTS</a>

                        <ul>
                            <li><a href="contact.html">Contact 01</a></li>
                            <li><a href="contact-2.html">Contact 02</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BUY EZbuy</a>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-24.js"></script>
</body>

<!-- molla/index-24.html  22 Nov 2019 10:02:48 GMT -->
</html>