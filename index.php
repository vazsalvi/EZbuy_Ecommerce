<?php
// Start the session
session_start();
// Check if the logout link is clicked
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    // Destroy all session variables and the session itself
    session_unset();
    session_destroy();

    // Redirect the user to the login page after logging out
    header("Location: login.php"); // Replace 'login.php' with your actual login page
    exit();
}


// Now, you can use $_SESSION['username'] for the logged-in user's username
// Check if the user is logged in by verifying the session variable
if (isset($_SESSION['username'])) {
    // Display the username if logged in
    echo "Welcome, " . $_SESSION['username'];
} else {
    // If the user is not logged in, you can display a message or leave it blank
    echo "Please log in to continue.";
}
?>

<!DOCTYPE html>
<html>

<!-- molla/index.html  22 Nov 2019 09:54:33 GMT -->

<head>
	<script type="text/javascript">
		if (top !== window) {
			top.location.href = window.location.href;
		}
		if (window.location.hash) {
			window.location.href = window.location.href.replace(window.location.hash, '');
		}
	</script>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Molla - Best Premium HTML Template</title>

	<meta name="author" content="p-Themes">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://www.portotheme.com/html/molla/assets/images/demos-img/favicon.ico"
		type="image/x-icon" />
	<link rel="apple-touch-icon"
		href="../../../www.portotheme.com/html/molla/assets/images/demos-img/apple-touch-icon.html">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/css/main.min.css">

	<style>
  .demos {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Adjust spacing between items */
  }

  .iso-item {
    flex: 1 1 calc(25% - 20px); /* 4 items per row with space adjustment */
    max-width: calc(25% - 20px); /* Ensure items don't exceed this width */
    box-sizing: border-box; /* Include padding/border in width calculations */
	padding: 10px; /* Add padding on all sides */
  }

  @media (max-width: 1200px) {
    .iso-item {
      flex: 1 1 calc(33.33% - 20px); /* 3 items per row for medium screens */
      max-width: calc(33.33% - 20px);
    }
  }

  @media (max-width: 768px) {
    .iso-item {
      flex: 1 1 calc(50% - 20px); /* 2 items per row for small screens */
      max-width: calc(50% - 20px);
    }
  }

  @media (max-width: 576px) {
    .iso-item {
      flex: 1 1 100%; /* 1 item per row for very small screens */
      max-width: 100%;
    }
  }
</style>


</head>

<body>
	<div class="page-wrapper">
		<header id="header">
			<div class="container-lg">
				<div class="header-left">
					<div class="logo">
<<<<<<< Updated upstream
						<a href="#"><img src="assets/images/demos-img/logo.png" alt="Molla Logo"></a>
=======
						<a href="#"><img src="assets/images/demos/demo-20/EZbuy.png" alt="Molla Logo" width="100" height="25"></a>
>>>>>>> Stashed changes
					</div>
				</div>
				<div class="header-main">
					<ul class="menu">
						<li>
							<a href="#" class="goto-demos">Demos</a>
						</li>
						<li>
							<a href="#" class="goto-features">Features</a>
						</li>
						<li>
							<a href="#" class="goto-support">Support</a>
						</li>
					</ul>
				</div>
				<div class="header-right">
					<a class="mobile-menu-toggler mr-0 mr-sm-5"><i class="icon-bars"></i></a>
					<a class="btn btn-primary btn-outline"><i class="icon-shopping-cart"></i>Buy Molla</a>
				</div>
			</div>
		</header>
		<div id="main">
			<section class="banner section-dark" style="background: #222;">
				<img src="assets/images/demos-img/header_splash.jpg" alt="" width="1920" height="1120">
				<div class="banner-text text-center">
					<h1>Multi-Purpose eCommerce HTML5 Template</h1>
					<h5 class="mb-5">Molla is simply the best choice for your new website. Your search for the best
						solution is over, get your own copy and join thousands of happy customers.</h5>
					<p class="mb-0"><a href="#" class="btn btn-primary btn-outline goto-demos">Explore Demos<i
								class="icon-long-arrow-alt-down"></i></a></p>
				</div>
			</section>
			<section class="section section-demos text-center container-lg">
				<h2>20 Pre-Build Demos</h2>
				<p>Comes with 20 homepages available with multi style that better for your choice.<br>Molla store is one
					of the best Multi-Purpose eCommerce HTML Template for your store.</p>
				<div class="demo-filter menu">
					<a href="#homepages" class="active">Home Pages</a>
					<a href="#shoppages">Shop Pages</a>
					<a href="#otherpages">Other Pages</a>
				</div>
				<div class="row demos">

					<div class="iso-item homepages">
						<a href="index-4.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_electronic2.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Electronic 2">
							<h5>Electronic 2</h5>
						</a>
					</div>

					<div class="iso-item homepages">
						<a href="index-10.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_shoesstore.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Shoes Store">
							<h5>Shoes Store</h5>
						</a>
					</div>
					<div class="iso-item homepages">
						<a href="index-11.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_furniture_simple.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Furniture 3">
							<h5>Furniture 3 <span>(Simple)</span></h5>
						</a>
					</div>
					<div class="iso-item homepages">
						<a href="index-12.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_fashion_simple.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Fashion 6 (Simple)">
							<h5>Fashion 6 <span>(Simple)</span></h5>
						</a>
					</div>

					<div class="iso-item homepages">
						<a href="index-19.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_gamestore.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Game Store">
							<h5>Game Store</h5>
						</a>
					</div>
					<div class="iso-item homepages">
						<a href="index-20.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_bookstore.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Book Store">
							<h5>Book Store</h5>
						</a>
					</div>
					<div class="iso-item homepages">
						<a href="index-21.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_sport.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Furniture 2">
							<h5>Sport Store</h5>
						</a>
					</div>
					<div class="iso-item homepages">
						<a href="index-24.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/molla_extreme_sport.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Furniture 2">
							<h5>Extreme Sport Store</h5>
						</a>
					</div>

					
					<div class="iso-item shoppages">
						<a href="users_area/cart.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/29_shop_shopping_cart.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Shopping Cart">
							<h5>Shopping Cart</h5>
						</a>
					</div>
					<div class="iso-item shoppages">
						<a href="users_area/checkout.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/30_shop_checkout.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Checkout">
							<h5>Checkout</h5>
						</a>
					</div>
					<div class="iso-item shoppages">
						<a href="users_area/wishlist.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/31_shop_wishlist.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Wishlist">
							<h5>Wishlist</h5>
						</a>
					</div>
					<div class="iso-item shoppages">
						<a href="users_area/dashboard.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/shop_my_account.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="My Account">
							<h5>My Account</h5>
						</a>
					</div>

					<div class="iso-item otherpages">
						<a href="about.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/40_pages_aboutus.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="About Us">
							<h5>About Us</h5>
						</a>
					</div>
					
					<div class="iso-item otherpages">
						<a href="contact-2.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/43_pages_contactus_2.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Contact us 2">
							<h5>Contact us 2</h5>
						</a>
					</div>
					<div class="iso-item otherpages">
						<a href="login.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/44_pages_login.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="Login page">
							<h5>Login page</h5>
						</a>
					</div>
					<div class="iso-item otherpages">
						<a href="faq.php" target="_blank">
							<img src="assets/images/demos-img/lazy.png"
								data-oi="assets/images/demos-img/45_pages_FAQ.jpg" width="500" height="385"
								class="molla-lz" style="padding-top: 77%" alt="F.A.Q page">
							<h5>F.A.Q page</h5>
						</a>
					</div>
					
				</div>
				<h5 class="text-load-more">More New Demos Coming Soon ...</h5>
			</section>

			<section class="section section-features">
				<h2 class="text-center">Our Core Features</h2>
				<p class="text-center">Powerful features and inclusions, which makes Molla standout,<br>easily
					customizable and scalable.</p>
				<div class="divider-line">
					<div class="container-lg">
						<div class="overflow-hidden">
							<div class="row">
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-laptop"></i>
										<h4>Fully Responsive Design Layouts</h4>
										<p>The Template looks good and sharp with all kind of devices and screen sizes.
											which increase the layout flexibility.</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-code"></i>
										<h4>Clean And Professional Codes</h4>
										<p>The Template is ready with clean and well structured coding style by the
											Professional developers team.</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-fill-drip"></i>
										<h4>Creative And Modern Design Layout</h4>
										<p>Every single section is created with the passion and years of experience in
											the website development.</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-align-left"></i>
										<h4>Perfect Documentations</h4>
										<p>There are lots of creative section for you. So we have create a documentation
											that will helpful to understand the flow.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-lg">
						<div class="overflow-hidden">
							<div class="row">
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-th"></i>
										<h4>Build With Bootstrap</h4>
										<p>This Template is created with latest bootstrap version which used its new
											classes and tags.</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-envelope-open-text"></i>
										<h4>Working Contact Form</h4>
										<p>There are different different styled form layouts that used to get in touch
											with you.</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-cogs"></i>
										<h4>Easily Customizable</h4>
										<p>The design is fully customizable. Unlimited color styles, all 500+ Google
											fonts, and etc!</p>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="icon-box">
										<i class="icon-html5" style="font-size: 2.4rem;""></i>
											<h4>Valid HTML 5 And CSS 3</h4>
											<p>We have used latest HTML and Css Coding style that makes the pages in well working state.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			<section class="section section-support section-dark">
				<div class="container molla-lz text-center" data-oi="assets/images/demos-img/support_bg.jpg">
					<h2>Outstaning Support Center<span class="fw-400">+</span>Extensive Documentation</h2>
					<p>Support is one of our priorities, our dedicatated support<br>will be waiting for you if you have
						any questions.</p>
				</div>
			</section>
			<section class="section section-light section-ready container text-center">
				<h2 class="mb-3">Molla Is Ready To Use. Get It Now!</h2>
				<p>DON'T FORGET TO APPRECIATE OUR WORK. RATE US NOW!</p>
				<div class="star-rating mb-4 pb-3">
					<i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i
						class="icon-star"></i><i class="icon-star"></i>
				</div>
				<p><a class="btn btn-primary btn-outline" href="#"><i class="icon-shopping-cart"></i>Buy Molla</a></p>
			</section>
		</div>
		<footer id="footer" class="container-lg">
			<div class="row">
				<div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
					<p class="copyright mb-0"><a href="templateshub.net">Templateshub</a></p>
				</div>
				<div class="col-md-6 text-center text-md-right social-icons">
					<label class="mr-3">Social Media</label>
					<a href="#" title="Facebook"><i class="icon-facebook-f"></i></a>
					<a href="#" title="Twitter"><i class="icon-twitter"></i></a>
					<a href="#" title="Instagram"><i class="icon-instagram"></i></a>
					<a href="#" title="Youtube"><i class="icon-youtube"></i></a>
					<a href="#" title="Pinterest"><i class="icon-pinterest"></i></a>
				</div>
			</div>
		</footer>
	</div>

	<!-- Mobile Menu -->
	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-close"></i></span>

			<nav class="mobile-nav">
				<ul class="mobile-menu">
					<li>
						<a href="#" class="goto-demos">Demos</a>
					</li>
					<li>
						<a href="#">Features</a>
					</li>
					<li>
						<a href="#">Support</a>
					</li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="d-flex justify-content-center social-icons">
				<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
				<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<!-- Vendor -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/jquery.appear/jquery.appear.min.js"></script>
	<!--<script src="lib/popper/umd/popper.min.js"></script>-->
	<script src="lib/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="lib/isotope/jquery.isotope.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/main.js"></script>
</body>

<!-- molla/index.html  22 Nov 2019 09:54:50 GMT -->

</html>