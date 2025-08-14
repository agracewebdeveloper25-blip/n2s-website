<?php 
	$css = '<link href="assets/css/style.css" rel="stylesheet">';
	$header ='false';				  
	$maincontent ='false';
?>
<?php include './layout/layout-top.php'?>

	<!-- Main Header-->
	<header class="main-header header-style-two">
		<!-- Header Top -->
		<?php include './partials/headertop.php'?>
		<!-- Header Top -->

		<!-- Header Lower -->
		<div class="header-lower">
			<!-- Main box -->
			<div class="main-box">
				<div class="logo-box">
					<div class="logo"><a href="index.php"><img src="assets/images/logo-2.png" alt=""></a></div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer">

					<nav class="nav main-menu">
						<ul class="navigation onepage-nav">
							<li class="current"><a href="#home">Home</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="#project">Project</a></li>
							<li><a href="#news">News</a></li>
						</ul>
					</nav>
					<!-- Main Menu End-->

					<div class="outer-box">
						<div class="ui-btn-outer">
							<button class="ui-btn ui-btn search-btn">
								<span class="icon lnr lnr-icon-search"></span>
							</button>
							<a href="shop-cart.php" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>
						</div>

						<a href="tel:+91(9999)9999" class="info-btn">
							<i class="icon fa fa-phone"></i>
							<small>Call Anytime</small><br> +91 (9999) 9999
						</a>

						<a href="page-contact.php" class="theme-btn btn-style-one"><span class="btn-title">get solution</span></a>

						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
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

				<ul class="navigation onepage-nav clearfix">
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
		</div>		 <!-- End Mobile Menu -->
		  

		<!-- Header Search -->
		<?php include './partials/headersearch.php'?>
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="index.php"><img src="assets/images/logo-2.png" alt=""></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation onepage-nav clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->

	<!-- Banner Section Two-->
	<section id="home" class="banner-section">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/2.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<span class="sub-title animate-1">Solutions for your businesses</span>
						<h1 class="title animate-2">Innovative Tech <br>Solutions</h1>
						<div class="btn-box animate-3">
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Explore More</span></a>
							<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn lightbox-image"><i class="icon fa fa-play"></i> watch video</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/1.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<span class="sub-title animate-1">Solutions for your businesses</span>
						<h1 class="title animate-2">Innovative Tech <br>Solutions</h1>
						<div class="btn-box animate-3">
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Explore More</span></a>
							<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn lightbox-image"><i class="icon fa fa-play"></i> watch video</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END Banner Section Two -->

	<!-- Services Section Three -->
	<section id="service" class="services-section-three">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Services we’re offering</span>
				<h2>We Provide our Clients <br>Best IT Services</h2>
			</div>
			<div class="outer-box">
				<div class="row justify-content-center">
					<!-- Service Block Two -->
					<div class="service-block-three col wow fadeInUp">
						<div class="inner-box ">
							<i class="icon flaticon-business-002-graph"></i>
							<h6 class="title"><a href="page-service-details.php">Product <br>Development</a></h6>
							<div class="text">Providing the solutions for tech business</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block-three col wow fadeInUp" data-wow-delay="200ms">
						<div class="inner-box ">
							<i class="icon flaticon-business-010-startup"></i>
							<h6 class="title"><a href="page-service-details.php">Digital <br>Marketing</a></h6>
							<div class="text">Providing the solutions for tech business</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block-three col wow fadeInUp" data-wow-delay="400ms">
						<div class="inner-box ">
							<i class="icon flaticon-business-030-settings"></i>
							<h6 class="title"><a href="page-service-details.php">Security <br>System</a></h6>
							<div class="text">Providing the solutions for tech business</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block-three col wow fadeInUp" data-wow-delay="600ms">
						<div class="inner-box ">
							<i class="icon flaticon-business-045-stationery"></i>
							<h6 class="title"><a href="page-service-details.php">UI/UX <br>Designing</a></h6>
							<div class="text">Providing the solutions for tech business</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block-three col wow fadeInUp" data-wow-delay="800ms">
						<div class="inner-box">
							<i class="icon flaticon-business-054-graph"></i>
							<h6 class="title"><a href="page-service-details.php">Data <br>Analysis</a></h6>
							<div class="text">Providing the solutions for tech business</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Three -->
	
	<!-- About Section Five -->
	<section id="about" class="about-section-seven pt-0">
		<div class="auto-container">
			<div class="row">
				<div class="content-column offset-lg-1 col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">About Our Company</span>
							<h2>We Execute Our ideas From The Start to Finish</h2>
							<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a
							tendency to believe the idea that smart looking of any website is the first impression on visitors.</div>
						</div>

						<div class="content-box">
							<div class="row">
								<div class="about-block-seven col-lg-6 col-md-6 col-sm-12">
									<h5 class="title"><i class="icon flaticon-business-020-hierarchy"></i> Expert Team Members </h5>
								</div>
								<div class="about-block-seven col-lg-6 col-md-6 col-sm-12">
									<h5 class="title"><i class="icon flaticon-business-002-graph"></i> Manage Tech Services </h5>
								</div>
							</div>	
							<div class="text">There are many of Ipsum but the have Aliq is notm hendr erit a augue insu image pellen simply free text</div>
							<div class="btn-box d-flex justify-content-between">
								<div class="founder-info">
									<div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
									<h5 class="name">Kevin Martin</h5>
									<span class="designation">Co Founder</span>
								</div>
								<a href="page-about.php" class="theme-btn btn-style-two"><span class="btn-title">Discover more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-5 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="assets/images/resource/about-3.jpg" alt="">
						</figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="assets/images/resource/about-4.jpg" alt="">
						</figure>
						<div class="experience">
							<img src="assets/images/resource/image-1.jpg" alt="" class="icon">
							<strong>3600+</strong> Satisfied Client
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section Five -->

	<!-- Services Section Four -->
	<section class="services-section-five" style="background-image: url(assets/images/background/5.jpg)">
		<div class="auto-container">
			<div class="sec-title light text-center">
				<span class="sub-title">Services we’re offering</span>
				<h2>We Provide our Clients <br>Best IT Services</h2>
			</div>

			<div class="row">
				<!-- Service Block Five -->
				<div class="service-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-035-helpline"></i>
						</div>
						<h4 class="title"><a href="page-service-details.php">Consultancy</a></h4>
						<div class="text">Taking seamless key performance indicators offline to maximise the tail</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-010-startup"></i>
						</div>
						<h4 class="title"><a href="page-service-details.php">Development</a></h4>
						<div class="text">Taking seamless key performance indicators offline to maximise the tail</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-032-megaphone"></i>
						</div>
						<h4 class="title"><a href="page-service-details.php">Marketing</a></h4>
						<div class="text">Taking seamless key performance indicators offline to maximise the tail</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-063-diamond"></i>
						</div>
						<h4 class="title"><a href="page-service-details.php">Softwares</a></h4>
						<div class="text">Taking seamless key performance indicators offline to maximise the tail</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Four-->

	<!-- Contact Section -->
	<section id="contact" class="contact-section-two pull-up layout_8">
		<div class="auto-container">
			<div class="row">
				<!-- Info Column -->
				<div class="info-column col-xl-7 col-lg-6 col-md-12 col-sm-12 order-2">
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
				<div class="form-column col-xl-5 col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form light wow fadeInLeft">
							<div class="title-box">
								<span class="sub-title">Contact us</span>
								<h3>Write Email</h3>
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

	<!-- Project Section -->
	<section id="project" class="project-section alternate">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">recently Completed work</span>
				<h2>Improve & Enhance the <br>Tech Projects</h2>
			</div>

			<div class="carousel-outer">
				<!-- Prject Carousel -->
				<div class="project-carousel owl-carousel owl-theme">
					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-1.jpg" class="lightbox-image"><img
											src="assets/images/resource/project-1.jpg" alt=""></a></figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">Tech Solutions</a></h4>
								<span class="cat">DESIGN / IDEAS</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-2.jpg" class="lightbox-image"><img
											src="assets/images/resource/project-2.jpg" alt=""></a></figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">Smart Visions</a></h4>
								<span class="cat">DESIGN / IDEAS</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-3.jpg" class="lightbox-image"><img
											src="assets/images/resource/project-3.jpg" alt=""></a></figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">Platform Integration</a></h4>
								<span class="cat">DESIGN / IDEAS</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-4.jpg" class="lightbox-image"><img
											src="assets/images/resource/project-4.jpg" alt=""></a></figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">Web Development</a></h4>
								<span class="cat">DESIGN / IDEAS</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Project Section -->

	<!-- Pricing Section -->
	<section class="pricing-section pt-0">
		<div class="auto-container">
			<div class="row">
				<!-- Content Column -->
				<div class="content-column col-xl-6 col-lg-12 col-md-12">
					<div class="inner-column wow fadeInRight">
						<div class="sec-title">
							<span class="sub-title">Our pricing plans</span>
							<h2>Choose Your Optimal Pricing Plans</h2>
						</div>
						<div class="info-box">
							<span class="icon fa fa-check"></span>
							<h5 class="title">Quality Services</h5>
							<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</div>
						</div>
						<div class="info-box">
							<span class="icon fa fa-check"></span>
							<h5 class="title">Business Management</h5>
							<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</div>
						</div>
						<div class="info-box">
							<span class="icon fa fa-check"></span>
							<h5 class="title">Expert IT Team</h5>
							<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</div>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="pricing-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<!-- Pricing Block -->
						<div class="pricing-block">
							<div class="inner-box">
								<figure class="image"><img src="assets/images/resource/pricing-1.png" alt=""></figure>
								<div class="price-box">
									<h4 class="price"><sup>$</sup>49</h4>
									<span class="validaty">/ Monthly</span>
								</div>
								<h4 class="title">Basic Plan</h4>
								<ul class="features">
									<li>24/7 system monitoring</li>
									<li>Security management</li>
									<li>Patch management</li>
									<li>Remote support</li>
								</ul>
								<div class="btn-box">
									<a href="page-pricing.php" class="theme-btn btn-style-one hvr-light"><span class="btn-title">Choose plan</span></a>
								</div>
							</div>
						</div>

						<!-- Pricing Block -->
						<div class="pricing-block style-two pull-left">
							<div class="inner-box">
								<figure class="image"><img src="assets/images/resource/pricing-2.png" alt=""></figure>
								<div class="price-box">
									<h4 class="price"><sup>$</sup>69</h4>
									<span class="validaty">/ Monthly</span>
								</div>
								<h4 class="title">Pro Plan</h4>
								<ul class="features">
									<li>24/7 system monitoring</li>
									<li>Security management</li>
									<li>Patch management</li>
									<li>Remote support</li>
								</ul>
								<div class="btn-box">
									<a href="page-pricing.php" class="theme-btn btn-style-one"><span class="btn-title">Choose plan</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Section Four -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<div class="sec-title">
				<span class="sub-title">Our feedbakcs</span>
				<h2>What They’re Talking<br> About Us</h2>
			</div>
			<div class="testimonials">
				<!-- Swiper -->
				<div class="swiper-container testimonial-content">
					<div class="swiper-wrapper">
						<!-- Testimonial Block Two -->
						<div class="testimonial-block swiper-slide">
							<div class="row">
								<div class="content-column col-lg-6 col-md-12">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									</div>
									<div class="text">This is due to their excellent service, competitive pricing and customer support. It’s refresing to get such a personal touch. Duis aute lorem ipsum is simply free text available in the market reprehen.</div>
									<div class="info-box">
										<h4 class="name">Mike Hardson</h4>
										<span class="designation">Senior Designer</span>
									</div>
								</div>
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
								</div>
							</div>
						</div>

						<!-- Testimonial Block Two -->
						<div class="testimonial-block swiper-slide">
							<div class="row">
								<div class="content-column col-lg-6 col-md-12">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									</div>
									<div class="text">competitive pricing and customer support. It’s refresing to get such a personal touch. Duis aute lorem ipsum is simply free text available in the market reprehen. This is due to their excellent service,</div>
									<div class="info-box">
										<h4 class="name">Jessica Brown</h4>
										<span class="designation">Senior Designer</span>
									</div>
								</div>
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
								</div>
							</div>
						</div>

						<!-- Testimonial Block Two -->
						<div class="testimonial-block swiper-slide">
							<div class="row">
								<div class="content-column col-lg-6 col-md-12">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									</div>
									<div class="text">Simply free text available in the market reprehen. This is due to their excellent service, competitive pricing and customer support. It’s refresing to get such a personal touch. Duis aute lorem ipsum is </div>
									<div class="info-box">
										<h4 class="name">michale smith</h4>
										<span class="designation">Senior Designer</span>
									</div>
								</div>
								<div class="image-column col-lg-6 col-md-12">
									<figure class="image"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
								</div>
							</div>
						</div>


						<!-- Add Pagination -->
						<div class="testimonial-pagination"></div>
					</div>
				</div>
				<!-- Testimonial Thumbs -->
				<div class="swiper-container testimonial-thumbs">
					<div class="swiper-wrapper">
						<div class="swiper-slide testimonial-thumb">
							<figure class="image"><img src="assets/images/resource/testi-thumb-2.jpg" alt=""></figure>
						</div>
						<div class="swiper-slide testimonial-thumb">
							<figure class="image"><img src="assets/images/resource/testi-thumb-1.jpg" alt=""></figure>
						</div>
						<div class="swiper-slide testimonial-thumb">
							<figure class="image"><img src="assets/images/resource/testi-thumb-3.jpg" alt=""></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- Clients Section   -->
	<section class="clients-section alternate">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel owl-carousel owl-theme">
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

	<!-- News Section -->
	<section id="news" class="news-section-two">
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-4 col-lg-4 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">from the blog</span>
							<h2>Our Latest News & Articles from the Blog</h2>
							<div class="text">There are many variations of passages of ipsum available, but the majority have suffered alteration in form.</div>
						</div>
					</div>
				</div>
				<!-- Carousel Column -->
				<div class="carousel-column col-xl-8 col-lg-8 col-md-12">
					<div class="carousel-outer">
						<div class="news-carousel owl-carousel owl-theme">
							<!-- News Block -->
							<div class="news-block">
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
							<div class="news-block">
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
							<div class="news-block">
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

							<!-- News Block -->
							<div class="news-block">
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
							<div class="news-block">
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
							<div class="news-block">
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
				</div>
			</div>
		</div>
	</section>
	<!--End News Section -->

	<!-- Locations Section -->
	<section class="locations-section-two">
		<div class="auto-container">
			<div class="row">
				<!-- Location 1-->
				<div class="location-block-two col-xl-3 col-md-6 wow fadeInUp">
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
				<div class="location-block-two col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
				<div class="location-block-two col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
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
				<div class="location-block-two col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="900ms">
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

	<!-- Map Section-->
	<section class="map-section alternate">
		<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
		</iframe>
	</section>
	<!--End Map Section-->

<?php include './layout/layout-bottom.php'?>