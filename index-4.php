<?php 
	$css = '<link href="assets/css/style.css" rel="stylesheet">';
	$header ='false';				  
	$maincontent ='false';	
	$footer ='false';	
?>
<?php include './layout/layout-top.php'?>

	<!-- Main Header-->
	<header class="main-header header-style-four">
		<!-- Header Lower -->
		<div class="header-lower">
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
				</div>

				<div class="outer-box">
					<a href="tel:+91(9999)9999" class="info-btn">
						<i class="icon fa fa-phone"></i>
						<small>Call Anytime</small><br> + 88 ( 9800 ) 6802
					</a>

					<!-- Mobile Nav toggler -->
					<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
				</div>
			</div>
		</div>
		<!-- End Header Lower -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Call Now</span>
							<a href="tel:+919999999999">+919 (9999) - 99999</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Send Email</span>
							<a href="mailto:help@company.com">help@company.com</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-clock"></span>
							<span class="title">Send Email</span>
							Mon - Sat 8:00 - 6:30, Sunday - CLOSED
						</div>
					</li>
				</ul>

				<ul class="social-links">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div>		 
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

	<!-- Banner Section Three-->
	<section class="banner-section-three">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/1.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<h1 class="title animate-1">Innovations</h1>
						<h2 class="sub-title animate-2">Technology Partners</h2>
						<div class="btn-box animate-3">
							<a href="page-about.php" class="theme-btn btn-style-one hvr-light"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/2.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<h1 class="title animate-1">Innovations</h1>
						<h2 class="sub-title animate-2">Technolgy Partners</h2>
						<div class="btn-box animate-3">
							<a href="page-about.php" class="theme-btn btn-style-one hvr-light"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Section Three -->

	<!-- About Section -->
	<section class="about-section pb-80 pt-0">
		<!-- Features Section -->
		<div class="features-section pull-up pt-0">
			<div class="auto-container">
				<div class="outer-box">
					<div class="row">
						<!-- Feature Block -->
						<div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
							<div class="inner-box ">
								<div class="title-box">
									<i class="icon flaticon-business-002-graph"></i>
									<h5 class="title"><a href="page-about.php">Perfect Business Solutions</a></h5>
								</div>
								<div class="text">When an unknown printer took <br>a galley type book.</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
							<div class="inner-box ">
								<div class="title-box">
									<i class="icon flaticon-business-012-startup"></i>
									<h5 class="title"><a href="page-about.php">Perfect Business Solutions</a></h5>
								</div>
								<div class="text">When an unknown printer took <br>a galley type book.</div>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
							<div class="inner-box ">
								<div class="title-box">
									<i class="icon flaticon-business-046-like"></i>
									<h5 class="title"><a href="page-about.php">Perfect Business Solutions</a></h5>
								</div>
								<div class="text">When an unknown printer took <br>a galley type book.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Features Section-->

		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">About Our Company</span>
							<h2>We Execute Our ideas From The Start to Finish</h2>
							<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any website is the first impression on visitors.</div>
						</div>

						<div class="content-box">
							<div class="info-box">
								<h5 class="title">High Quality IT Solutions for Startup</h5>
								<a href="#" class="read-more">More <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>

							<div class="about-block">
								<i class="icon flaticon-business-018-startup"></i>
								<h5 class="title">Manage Tech Services </h5>
								<div class="text">We’ve designed a culture that allows our stewards to assimilate</div>
							</div>

							<div class="about-block">
								<i class="icon flaticon-business-027-world"></i>
								<h5 class="title">Internal Networking</h5>
								<div class="text">We’ve designed a culture that allows our stewards to assimilate.</div>
							</div>

						</div>

						<div class="btm-box">
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
						<div class="experience bounce-y">
							<img src="assets/images/resource/image-1.jpg" alt="" class="icon">
							<strong>3600+</strong> Satisfied Client
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Project Section -->
	<section class="project-section-two">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">recently Completed work</span>
				<h2>Improve & Enhance the <br>Tech Projects</h2>
			</div>

			<div class="carousel-outer">
				<!-- Prject Carousel -->
				<div class="project-carousel-two owl-carousel owl-theme">
					<!-- Project Block Two -->
					<div class="project-block-two">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-5.jpg" class="lightbox-image"><img src="assets/images/resource/project-5.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<h5 class="title"><a href="page-project-details.php">Tech Solutions</a></h5>
								<span class="cat">DESIGN / IDEAS</span>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Project Block Two -->
					<div class="project-block-two">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-6.jpg" class="lightbox-image"><img src="assets/images/resource/project-6.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<h5 class="title"><a href="page-project-details.php">Smart Visions</a></h5>
								<span class="cat">DESIGN / IDEAS</span>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Project Block Two -->
					<div class="project-block-two">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-7.jpg" class="lightbox-image"><img src="assets/images/resource/project-7.jpg" alt=""></a></figure>
							</div>
							<div class="content-box">
								<h5 class="title"><a href="page-project-details.php">Platform Integration</a></h5>
								<span class="cat">DESIGN / IDEAS</span>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Project Section -->

	<!-- Offer Section Two -->
	<section class="offer-section-two">
		<div class="auto-container">
			<div class="row">
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">Welcome to tech</span>
							<h2>Your Success with the Best IT Solutions</h2>
						</div>
						<div class="info-box">
							<span class="count">01</span>
							<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer.</div>
						</div>
						<div class="info-box">
							<span class="count">02</span>
							<div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer.
							</div>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-box">
							<figure class="image"><img src="assets/images/resource/image-6.jpg" alt=""></figure>
							<div class="video-box wow fadeIn">
								<h4 class="title">Watch our video</h4>
								<img class="arrow-icon" src="assets/images/icons/icon-arrow.png" alt="">
								<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn lightbox-image"><i class="icon fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Section -->

	<!-- Fun Fact Section -->
	<section class="fun-fact-section-two">
		<div class="auto-container">
			<div class="fact-counter">
				<div class="row">
					<!-- Counter Block Two-->
					<div class="counter-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner">
							<i class="icon flaticon-business-060-graph"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="4520">0</span>
							</div>
							<h6 class="counter-title">Project completed</h6>
						</div>
					</div>

					<!-- Counter Block Two-->
					<div class="counter-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
						<div class="inner">
							<i class="icon flaticon-business-035-helpline"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="326">0</span></div>
							<h6 class="counter-title">IT specialists</h6>
						</div>
					</div>

					<!-- Counter Block Two-->
					<div class="counter-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
						<div class="inner">
							<i class="icon flaticon-business-020-hierarchy"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="8600">0</span>
							</div>
							<h6 class="counter-title">Satisfied clients</h6>
						</div>
					</div>

					<!-- Counter Block Two-->
					<div class="counter-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
						<div class="inner">
							<i class="icon flaticon-business-048-coin"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="238">0</span></div>
							<h6 class="counter-title">Smart solutions</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Fun Fact Section -->

	<!-- Team Section -->
	<section class="team-section-two">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Our team expert</span>
				<h2>Meet Professionals</h2>
			</div>
			<div class="row">
				<!-- Team block -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Adman Michel</a></h5>
							<span class="designation">Web Developer</span>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-4.jpg" alt=""></a></figure>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Jessica Brown</a></h5>
							<span class="designation">Web Developer</span>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-3.jpg" alt=""></a></figure>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box">
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Richerd William</a></h5>
							<span class="designation">Web Developer</span>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-2.jpg" alt=""></a></figure>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box">
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">Sara Albert</a></h5>
							<span class="designation">Web Developer</span>
							<span class="share-icon fa fa-share-alt"></span>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-1.jpg" alt=""></a></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-3 col-lg-12">
					<div class="sec-title">
						<span class="sub-title">Our feedbacks</span>
						<h3>What They’re Talking About Company</h3>
						<div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.</div>
					</div>
				</div>

				<!-- Testimonial Column -->
				<div class="testimonial-column col-xl-9 col-lg-12">
					<div class="inner-column">
						<!-- Testimonial Carousel -->
						<div class="testimonial-carousel owl-carousel owl-theme">

							<!-- Testimonial Block -->
							<div class="testimonial-block-two">
								<div class="inner-box">
									<div class="content-box">
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
									</div>
									<div class="info-box">
										<div class="thumb"><img src="assets/images/resource/testi-thumb-4.jpg" alt=""></div>
										<h6 class="name">Sarah Albert</h6>
										<span class="designation">Designer</span>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block-two">
								<div class="inner-box">
									<div class="content-box">
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
									</div>
									<div class="info-box">
										<div class="thumb"><img src="assets/images/resource/testi-thumb-5.jpg" alt=""></div>
										<h6 class="name">Mike Hardson</h6>
										<span class="designation">Designer</span>
									</div>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block-two">
								<div class="inner-box">
									<div class="content-box">
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
									</div>
									<div class="info-box">
										<div class="thumb"><img src="assets/images/resource/testi-thumb-6.jpg" alt=""></div>
										<h6 class="name">Jessica Brown</h6>
										<span class="designation">Designer</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- Contact Section -->
	<section class="contact-section-two pull-up">
		<div class="auto-container">
			<div class="row">
				<!-- Info Column -->
				<div class="info-column col-xl-7 col-lg-6 order-2">
					<div class="inner-column wow fadeInRight">
						<div class="sec-title">
							<div class="sub-title">Get to know</div>
							<h3>Keep your Vision to Our Projects</h3>
						</div>
						<figure class="image overlay-anim"><img src="assets/images/resource/contact.jpg" alt=""></figure>
						<div class="info-box">
							<span class="icon fa fa-check"></span>
							<h5 class="title">Cloud Based Services</h5>
							<div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free</div>
						</div>
						<div class="info-box">
							<span class="icon fa fa-check"></span>
							<h5 class="title">End to End Solutions</h5>
							<div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free</div>
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-xl-5 col-lg-6">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form light wow fadeInLeft">
							<div class="title-box">
								<span class="sub-title">Contact us</span>
								<h3>Write Email</h3>
							</div>
							<!--Contact Form-->
							<form id="contact_form" name="contact_form" action="includes/sendmail.php" method="post">
								<div class="form-group">
									<input name="form_name" class="form-control required" type="text" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input name="form_email" class="form-control required" type="text" placeholder="Email Address">
								</div>
								<div class="form-group">
									<input name="form_phone" class="form-control required" type="form_phone" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<textarea name="form_message" class="form-control required" placeholder="Write a Message"></textarea>
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
	<!--End FAQ Section -->

	<!-- Features Section Four -->
	<section class="features-section-four pull-down p-0">
		<div class="auto-container">
			<div class="row g-0">
				<!-- Feature Block -->
				<div class="feature-block-four col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
					<div class="inner-box">
						<div class="content" style="background-image: url(assets/images/resource/feature-bg-1.jpg)">
							<span class="icon flaticon-business-030-settings"></span>
							<h5 class="title">End to End Development</h5>
							<div class="text">There are many variations of available</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block-four col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
					<div class="inner-box">
						<div class="content" style="background-image: url(assets/images/resource/feature-bg-2.jpg)">
							<span class="icon flaticon-business-035-helpline"></span>
							<h5 class="title">End to End Development</h5>
							<div class="text">There are many variations of available</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features Section Four -->

	<!-- News Section -->
	<section class="news-section alternate">
		<div class="bg-shape"></div>
		<div class="auto-container">
			<div class="sec-title text-center light">
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

	<!-- Locations Section -->
	<section class="locations-section-two pt-0">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Get an awesome service</span>
				<h2>Our Customer Points <br>Worldwide</h2>
			</div>

			<div class="row">
				<!-- Location 1-->
				<div class="location-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<h5 class="title">Newyork</h5>
						<ul class="info-list">
							<li>66 Road Broklyn Street, New York</li>
							<li><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
							<li><a href="tel:+919999999999">+91 999 999 9999</a></li>
						</ul>
					</div>
				</div>

				<!-- Location 1-->
				<div class="location-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<h5 class="title">Washington</h5>
						<ul class="info-list">
							<li>66 Road Broklyn Street, New York</li>
							<li><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
							<li><a href="tel:+919999999999">+91 999 999 9999</a></li>
						</ul>
					</div>
				</div>

				<!-- Location 1-->
				<div class="location-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<h5 class="title">Boston</h5>
						<ul class="info-list">
							<li>66 Road Broklyn Street, New York</li>
							<li><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
							<li><a href="tel:+919999999999">+91 999 999 9999</a></li>
						</ul>
					</div>
				</div>

				<!-- Location 1-->
				<div class="location-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
					<div class="inner-box">
						<h5 class="title">Chicago</h5>
						<ul class="info-list">
							<li>66 Road Broklyn Street, New York</li>
							<li><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
							<li><a href="tel:+919999999999">+91 999 999 9999</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Locations Section -->

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

	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="bg-image"  style="background-image: url(assets/images/background/2.jpg)"></div>

		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row">
					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-12 col-md-6 col-sm-12">
						<div class="footer-widget about-widget">
							<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="" ></a></div>
							<div class="text">Desires to obtain pain of itself, because it is pain, but occasionally circumstances.</div>
							<ul class="social-icon-two">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget">
							<h3 class="widget-title">Explore</h3>
							<ul class="user-links">
								<li><a href="#">About Company</a></li>
								<li><a href="#">Meet the Team</a></li>
								<li><a href="#">News & Media</a></li>
								<li><a href="#">Our Projects</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget contact-widget">
							<h3 class="widget-title">Contact</h3>
							<div class="widget-content">
								<div class="text">66 Road Broklyn Street, 600 New York, USA</div>
								<ul class="contact-info">
									<li><i class="fa fa-envelope"></i> <a href="mailto:needhelp@yourdomain.com">needhelp@company.com</a><br></li>
									<li><i class="fa fa-phone-square"></i> <a href="tel:+919999999999">+91 999 999 9999</a><br></li>
								</ul>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget gallery-widget">
							<h3 class="widget-title">Gallery</h3>
							<div class="widget-content">
								<div class="outer clearfix">
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-1.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-2.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-3.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-4.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-5.jpg" alt=""></a>
									</figure>
									<figure class="image">
										<a href="#"><img src="assets/images/resource/project-thumb-6.jpg" alt=""></a>
									</figure>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright reserved by <a href="index.php">company.com</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

<?php include './layout/layout-bottom.php'?>