<?php
	$css = '<link href="assets/css/style.css" rel="stylesheet">';
	$header ='false';				  
	$maincontent ='false';	
?>
<?php include './layout/layout-top.php'?>

	<!-- Main Header-->
	<header class="main-header header-style-three">
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="top-left">
						<ul class="social-icon-one">
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
							<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						</ul>
					</div>

					<div class="top-right">
						<!-- Info List -->
						<ul class="list-style-one">
							<li><i class="fa fa-envelope"></i> <a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
							<li><i class="fa fa-map-marker"></i> 88 Broklyn Golden Street. New York</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Top -->

		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<!-- Main box -->
				<div class="main-box">
					<div class="logo-box">
						<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
					</div>

					<!--Nav Box-->
					<div class="nav-outer">

					<nav class="nav main-menu">
						<ul class="navigation">
						<li class="current dropdown"><a href="index.php">Home</a>
							<ul>
								<li><a href="index.php">Home page 01</a></li>
								<li><a href="index-2.php">Home page 02</a></li>
								<li class="dropdown"><a href="index.php">New Home</a>
									<ul>
										<li><a href="index-3.php">Home Page 03</a></li>
										<li><a href="index-4.php">Home Page 04</a></li>
										<li><a href="index-5.php">Home Page 05</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="index-1-single.php">Single Styles</a>
									<ul>
										<li><a href="index-1-single.php">Single Page 01</a></li>
										<li><a href="index-2-single.php">Single Page 02</a></li>
										<li><a href="index-3-single.php">Single Page 03</a></li>
										<li><a href="index-4-single.php">Single Page 04</a></li>
										<li><a href="index-1-single.php">Single Page 05</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="index-1-dark.php">Dark Styles</a>
									<ul>
										<li><a href="index-1-dark.php">Dark Page 01</a></li>
										<li><a href="index-2-dark.php">Dark Page 02</a></li>
										<li><a href="index-3-dark.php">Dark Page 03</a></li>
										<li><a href="index-4-dark.php">Dark Page 04</a></li>
										<li><a href="index-1-dark.php">Dark Page 05</a></li>
									</ul>
								</li>
								<li><a href="index-1-rtl.php">RTL Style One</a></li>
							</ul>
						</li>
							<li class="dropdown"><a href="#">Pages</a>
								<ul>
									<li><a href="page-about.php">About</a></li>
									<li class="dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="page-projects.php">Projects List</a></li>
											<li><a href="page-project-details.php">Project Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Team</a>
										<ul>
											<li><a href="page-team.php">Team List</a></li>
											<li><a href="page-team-details.php">Team Details</a></li>
										</ul>
									</li>
									<li><a href="page-testimonial.php">Testimonial</a></li>
									<li><a href="page-pricing.php">Pricing</a></li>
									<li><a href="page-pricing-switcher.php">Pricing Switcher</a></li>
									<li><a href="page-faq.php">FAQ</a></li>
									<li><a href="page-404.php">Page 404</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#">Services</a>
								<ul>
									<li><a href="page-services.php">Services List</a></li>
									<li><a href="page-service-details.php">Service Details</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#">Shop</a>
								<ul>
									<li><a href="shop-products.php">Products</a></li>
									<li><a href="shop-products-sidebar.php">Products with Sidebar</a></li>
									<li><a href="shop-product-details.php">Product Details</a></li>
									<li><a href="shop-cart.php">Cart</a></li>
									<li><a href="shop-checkout.php">Checkout</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#">News</a>
								<ul>
									<li><a href="news-grid.php">News Grid</a></li>
									<li><a href="news-details.php">News Details</a></li>
								</ul>
							</li>
							<li><a href="page-contact.php">Contact</a></li>
						</ul>
					</nav>
						<!-- Main Menu End-->


						<div class="outer-box">
							<div class="ui-btn-outer border-0">
								<button class="ui-btn ui-btn search-btn">
									<span class="icon lnr lnr-icon-search"></span>
								</button>
								<a href="shop-cart.php" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>
							</div>

							<!-- Mobile Nav toggler -->
							<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Lower -->

		<!-- Mobile Menu  -->
		<?php include './partials/mobilemenu.php'?>
		<!-- End Mobile Menu -->
		  
		<!-- Header Search -->
		<?php include './partials/headersearch.php'?>
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<!-- Sticky Header  -->
		<?php include './partials/stickyheader.php'?>
		<!-- End Sticky Menu --><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->

	<!-- Banner Section Two-->
	<section class="banner-section-two">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/2.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<span class="sub-title animate-2">Solutions for your businesses</span>
						<h1 class="title animate-3">Technology Solutaions for Future</h1>
						<div class="btn-box animate-4">
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/1.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<span class="sub-title animate-2">Solutions for your businesses</span>
						<h1 class="title animate-3">Technology Solutaions for Future</h1>
						<div class="btn-box animate-4">
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END Banner Section Two -->

	<!-- Call To Action Two -->
	<section class="call-to-action-two alternate p-0">
		<div class="auto-container">
			<div class="outer-box wow fadeIn">
				<!-- Image Box -->
				<div class="image-box">
					<figure class="image"><img src="assets/images/resource/image-2.jpg" alt=""></figure>
				</div>
				<!-- Content Box -->
				<div class="content-box">
					<div class="title-box">
					  <h3 class="title">We’re Ready <br>Develop Your Site!</h3>
					</div>
					<div class="btn-box">
						<a href="page-services.php" class="theme-btn btn-style-four"><span class="btn-title">More Services</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->

	<!-- About Section Five -->
	<section class="about-section-three layout_6">
		<div class="auto-container">
			<div class="row">
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="assets/images/resource/about-5.jpg" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="assets/images/resource/about-6.jpg" alt=""></figure>
					</div>
				</div>

				<div class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">Welcome to tech</span>
							<h2>Best IT Technology Services you can Trust</h2>
							<h5>The professional approach to technology.</h5>
							<div class="text">System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols. Perspiciatis unde omnis natus error voluptatems accusa.</div>
						</div>

						<div class="content-box">
							<div class="row">
								<div class="about-block-three col-lg-6 col-md-6 col-sm-12">
									<h5 class="title"><i class="icon fa fa-arrow-alt-circle-right"></i> Cloud Based </h5>
									<p class="text">Lorem ipsum dolor sit amet not is consectetur notted</p>
								</div>

								<div class="about-block-three col-lg-6 col-md-6 col-sm-12">
									<h5 class="title"><i class="icon fa fa-arrow-alt-circle-right"></i> Full Backup </h5>
									<p class="text">Lorem ipsum dolor sit amet not is consectetur notted.</p>
								</div>
							</div>

							<div class="about-info-box">
								<span class="icon lnr-icon-phone"></span>
								<div class="content">
									<span class="title">Call to Get a Free Estimate</span>
									<a href="tel:001112223333" class="number">00 111 222 3333</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--Emd About Section Five -->

	<!-- Video Section -->
	<section class="video-section">
		<div class="auto-container">
			<div class="outer-box">
				<div class="title-box text-center">
					<h3 class="title">Trusted IT Solution<br> & Service Agency</h3>
				<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion <br>for our Company. We have to a tendency to believe</div>
				</div>
				<div class="video-box wow fadeInUp">
					<figure class="image"><img src="assets/images/resource/video-img.jpg" alt=""></figure>
					<div class="content">
						<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn lightbox-image"><i class="icon fa fa-play"></i></a>
						<h2 class="title">Watch Video</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Video Section -->

	<!-- Services Section Four -->
	<section class="services-section-four layout_6">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Services we’re offering</span>
				<h2>We Provide our Clients <br>Best IT Services</h2>
			</div>

			<div class="row">
				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-002-graph"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">Product <br>Development</a></h5>
						<div class="text">Providing the solutions for tech business</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-012-startup"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">Digital <br>Marketing</a></h5>
						<div class="text">Providing the solutions for tech business</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-046-like"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">Security <br>System</a></h5>
						<div class="text">Providing the solutions for tech business</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-four col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-006-target"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">UI/UX <br>Designing</a></h5>
						<div class="text">Providing the solutions for tech business</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Four-->

	<!-- Team Section -->
	<section class="team-section">
		<div class="anim-icons">
			<span class="icon icon-lines bounce-x"></span>
			<span class="icon icon-dots bounce-y"></span>
		</div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Our feedbakcs</span>
				<h2>EXPERTS READY TO SURVE</h2>
			</div>
			<div class="row">
				<!-- Team block -->
				<div class="team-block-three col-lg-4 col-sm-6 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-1.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Adman Michel</a></h5>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-three col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-2.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Adman Michel</a></h5>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-three col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-3.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Adman Michel</a></h5>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- Contact Section -->
	<section class="contact-section-four layout_6 pt-0">
		<div class="auto-container">
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row">
					<!-- Counter block-->
					<div class="counter-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner">
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="4520">0</span></div>
							<h6 class="counter-title">Project completed</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
						<div class="inner">
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="325">0</span></div>
							<h6 class="counter-title">IT specialists</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
						<div class="inner">
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="1357">0</span></div>
							<h6 class="counter-title">Satisfied clients</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
						<div class="inner">
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="238">0</span></div>
							<h6 class="counter-title">Smart solutions</h6>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<!-- Info Column -->
				<div class="info-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight">
						<div class="title-box">
							<h3 class="title">Best IT Technology <br>Services you can Trust</h3>
						</div>

						<div class="our-values">
							<figure class="image"><img src="assets/images/resource/our-value.jpg" alt=""></figure>
							<div class="content">
								<h5 class="title">Manage Tech Services</h5>
								<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking</div>
							</div>
						</div>

						<div class="info-box">
							<figure class="image"><img src="assets/images/resource/our-value-2.jpg" alt=""></figure>
							<!-- Counter block-->
							<div class="counter-block-two">
								<div class="count-box"><span class="count-text" data-speed="3000" data-stop="4520">0</span></div>
								<h6 class="counter-title">Clients worldwide took Professional IT services</h6>
							</div>
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-xl-5 col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form light wow fadeInLeft">
							<div class="title-box">
								<span class="sub-title">Contact us</span>
								<h3>Get a Free Quote</h3>
								<p>There are many variations of passages</p>
							</div>

							<!--Contact Form-->
							<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
								<div class="form-group">
									<input name="form_name" class="form-control" type="text" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
								<div class="form-group">
									<input name="form_phone" class="form-control" type="text" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<textarea name="form_message" class="form-control required" rows="7" placeholder="Write a Message"></textarea>
								</div>
								<div class="form-group">
									<input name="form_botcheck" class="form-control" type="hidden" value="" />
									<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send A Message</span></button>
								</div>
							</form>
						</div>
						<!--End Contact Form -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Contact Section -->

	<!-- Call To Action Four -->
	<section class="call-to-action-four" style="background-image: url(assets/images/background/4.jpg)">
		<div class="auto-container">
			<div class="outer-box">
				<div class="title-box">
					<div class="sub-title">We’re here to help to grow your business.</div>
					<h3 class="title">Looking for the Best IT Business Solutions?</h3>
				</div>
				<div class="btn-box">
					<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Four -->
	
	<!-- Testimonial Section Three -->
	<section class="testimonial-section-five">
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-12 col-lg-12 col-md-12">
					<div class="inner-column">
						<div class="sec-title text-center">
							<span class="sub-title">CLIENT’S TESTIMONIALS</span>
							<h2>What They’re Talking About Us</h2>
						</div>
					</div>
				</div>

				<!-- Testimonial Column -->
				<div class="testimonial-column col-xl-12 col-lg-12 col-md-12">
					<div class="carousel-outer">
						<div class="testimonial-carousel-five owl-carousel owl-theme">
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-five">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Proin a lacus arcu. Nullam id dui eu orci maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora torquent per conubia nostra.</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-3.jpg" alt=""></figure>
										<h5 class="name">Jessica Brown</h5>
										<span class="designation">Co Founder</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-five">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Proin a lacus arcu. Nullam id dui eu orci maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora torquent per conubia nostra.</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-2.jpg" alt=""></figure>
										<h5 class="name">Jessica Brown</h5>
										<span class="designation">Co Founder</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block Four -->
							<div class="testimonial-block-five">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Proin a lacus arcu. Nullam id dui eu orci maximus. Cras at auctor lectus, vel pretium tellus. Class aptent sociosqu ad litora torquent per conubia nostra.</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="name">Jessica Brown</h5>
										<span class="designation">Co Founder</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section Three -->

	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">from the blog</span>
				<h2>News & Articles</h2>
			</div>

			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-1.jpg" alt=""></a></figure>
							<span class="date"><b>28</b> OCT</span>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user"></i> by Admin</li>
								<li><i class="fa fa-tag"></i> Technology</li>
							</ul>
							<h4 class="title"><a href="news-details.php">Professional technology information & solutions are just like…</a></h4>
						</div>
						<div class="bottom-box">
							<a href="news-details.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							<div class="comments"><i class="fa fa-comments"></i> 02</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-2.jpg" alt=""></a></figure>
							<span class="date"><b>28</b> OCT</span>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user"></i> by Admin</li>
								<li><i class="fa fa-tag"></i> Technology</li>
							</ul>
							<h4 class="title"><a href="news-details.php">Professional technology information & solutions are just like…</a></h4>
						</div>
						<div class="bottom-box">
							<a href="news-details.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							<div class="comments"><i class="fa fa-comments"></i> 02</div>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-3.jpg" alt=""></a></figure>
							<span class="date"><b>28</b> OCT</span>
						</div>
						<div class="content-box">
							<ul class="post-info">
								<li><i class="fa fa-user"></i> by Admin</li>
								<li><i class="fa fa-tag"></i> Technology</li>
							</ul>
							<h4 class="title"><a href="news-details.php">Professional technology information & solutions are just like…</a></h4>
						</div>
						<div class="bottom-box">
							<a href="news-details.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
							<div class="comments"><i class="fa fa-comments"></i> 02</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End News Section -->

	<!-- Clients Section   -->
	<section class="clients-section border-top">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel py-5 owl-carousel owl-theme">
					<li class="slide-item"> <a href="#"><img src="assets/images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="assets/images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="assets/images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="assets/images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="assets/images/resource/client.png" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->

<?php include './layout/layout-bottom.php'?>