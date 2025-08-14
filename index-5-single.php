<?php 
	$css = '<link href="assets/css/style.css" rel="stylesheet">';
	$header ='false';			  
	$maincontent ='false';
	$footer ='false';
?>

<?php include './layout/layout-top.php'?>

	<!-- Main Header-->
	<header class="main-header header-style-five">
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
						<ul class="navigation onepage-nav">
							<li class="current"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="#project">Project</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="#team">Team</a></li>
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
							<small>Call Anytime</small><br> + 88 ( 9800 ) 6802
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
		</div>		 
		<!-- End Mobile Menu -->

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

	<!-- Banner Section Four-->
	<section id="home" class="banner-section-four">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(assets/images/main-slider/1.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
						<h1 class="title animate-1">Tools For <br>Development</h1>
						<div class="text animate-2">There are many of passages of lorem Ipsum, but the majori have<br> suffered alteration in some form.</div>
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
						<h1 class="title animate-1">Tools For <br>Development</h1>
						<div class="text animate-2">There are many of passages of lorem Ipsum, but the majori have<br> suffered
							alteration in some form.</div>
						<div class="btn-box animate-3">
							<a href="page-about.php" class="theme-btn btn-style-one hvr-light"><span class="btn-title">Discover more</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END Banner Section Four -->

	<!-- About Section Three -->
	<section id="about" class="about-section-three pb-60">
		<div class="auto-container">
			<div class="row">
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
							<!--Skills-->
							<div class="skills">
								<!--Skill Item-->
								<div class="skill-item">
									<div class="skill-header">
										<h6 class="skill-title">Technology</h6>
									</div>
									<div class="skill-bar">
										<div class="bar-inner">
											<div class="bar progress-line" data-width="77">
												<div class="skill-percentage">
													<div class="count-box"><span class="count-text" data-speed="3000" data-stop="77">0</span>%</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-box">
								<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">Discover more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="assets/images/resource/about-5.jpg" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="assets/images/resource/about-6.jpg" alt=""></figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section Two -->

	<!-- Services Section -->
	<section id="service" class="services-section services-section-bg">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Services we’re offering</span>
				<h2>High quality products and services<br> that we stand behind</h2>
			</div>

			<div class="row">
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-service-details.php"><img src="assets/images/resource/service-1.jpg" alt=""></a></figure>
							<div class="icon-box"><i class="icon flaticon-business-010-startup"></i></div>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="page-service-details.php">Product Development</a></h5>
							<div class="text">We’ve designed a culture that allows our stewards to assimilate</div>
							<a href="page-service-details.php" class="read-more">read More <i class="fa fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-service-details.php"><img src="assets/images/resource/service-2.jpg" alt=""></a></figure>
							<div class="icon-box"><i class="icon flaticon-business-002-graph"></i></div>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="page-service-details.php">UI/UX Designing</a></h5>
							<div class="text">We’ve designed a culture that allows our stewards to assimilate</div>
							<a href="page-service-details.php" class="read-more">read More <i class="fa fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-service-details.php"><img src="assets/images/resource/service-3.jpg" alt=""></a></figure>
							<div class="icon-box"><i class="icon flaticon-business-048-coin"></i></div>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="page-service-details.php">Digital Marketing</a></h5>
							<div class="text">We’ve designed a culture that allows our stewards to assimilate</div>
							<a href="page-service-details.php" class="read-more">read More <i class="fa fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section-->

	<!-- skill Section -->
	<section class="title-skill-text-ten pb-60">
		<h1 class="text-center text-uppercase">Techo</h1>
		<div class="auto-container">
			<div class="row">
			</div>
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-lg-4">
					<div class="inner-column">
						<div class="sec-title">
							<h2>We’re Doing the Right Thing. The Right Way</h2>
						</div>
					</div>
				</div>
				<!-- Title Column -->
				<div class="column col-lg-4">
					<div class="inner-column">
						<div class="sec-title">
							<div class="text">There are many variations of passages of but the majority have in some form, by injected humou or which words <br> <br>Lorem don't look even slightly believable of but the majority have suffered</div>
						</div>
					</div>
				</div>
				<div class="skill-column col-lg-4">
					<div class="inner-column">
						<!--Skills-->
						<div class="skills">
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header">
									<h6 class="skill-title">Maintenance</h6>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="86">
											<div class="skill-percentage">
												<div class="count-box"><span class="count-text" data-speed="3000" data-stop="86">0</span>%</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header">
									<h6 class="skill-title">Solutions</h6>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="77">
											<div class="skill-percentage">
												<div class="count-box"><span class="count-text" data-speed="3000" data-stop="77">0</span>%</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header">
									<h6 class="skill-title">Solutions</h6>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="77">
											<div class="skill-percentage">
												<div class="count-box"><span class="count-text" data-speed="3000" data-stop="77">0</span>%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End skill Section -->

	<!-- Call To Action Two -->
	<section class="call-to-action-six p-0">
		<div class="auto-container">
			<div class="outer-box wow fadeIn">
				<!-- Content Box -->
				<div class="content-box">
					<div class="title-box">
						<h4>Get Your IT Technology <br> Solutions</h4>
					</div>
					<!-- Image Box -->
					<div class="icon-box">
						<a href="mailto:domain@company.com"><i class="flaticon-business-008-email"></i></a>
					</div>
					<div class="info-number-box">
						<small>Get professional help</small><br> 92 666 888 000
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->

	<!-- Call To Action Two -->
	<?php include './partials/callaction.php'?>
	<!--End Call To Action Two -->

	<!-- Work Section -->
	<section class="work-section">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Tech Management</span>
				<h2>The Best Source for <br> IT Solutions</h2>
			</div>

			<div class="tabs-box work-tabs">
				<!--Tabs Box-->
				<ul class="tab-buttons clearfix">
					<li class="tab-btn" data-tab="#tab1">Gaming</li>
					<li class="tab-btn active-btn" data-tab="#tab2">Entertainment</li>
					<li class="tab-btn" data-tab="#tab3">Tech Solution</li>
				</ul>

				<div class="tabs-content">
					<!--Tab-->
					<div class="tab" id="tab1">
						<div class="row">
							<!-- Content Column -->
							<div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
								<div class="inner-column">
									<h3>We Execute Our ideas From The Start to Finish</h3>
									<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for our Company.</div>

									<div class="content-box">
										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> Cloud Based Services </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>

										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> End to End Solutions </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Image Column -->
							<div class="image-column col-xl-5 col-lg-6 col-md-12">
								<figure class="image overlay-anim"><img src="assets/images/resource/work-1.jpg" alt=""></figure>
							</div>
						</div>
					</div>

					<!--Tab-->
					<div class="tab active-tab" id="tab2">
						<div class="row">
							<!-- Content Column -->
							<div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
								<div class="inner-column">
									<h3>We Execute Our ideas From The Start to Finish</h3>
									<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for
										our Company.</div>

									<div class="content-box">
										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> Cloud Based Services </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>

										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> End to End Solutions </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Image Column -->
							<div class="image-column col-xl-5 col-lg-6 col-md-12">
								<figure class="image overlay-anim"><img src="assets/images/resource/work-1.jpg" alt=""></figure>
							</div>
						</div>
					</div>

					<!--Tab-->
					<div class="tab" id="tab3">
						<div class="row">
							<!-- Content Column -->
							<div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
								<div class="inner-column">
									<h3>We Execute Our ideas From The Start to Finish</h3>
									<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for
										our Company.</div>

									<div class="content-box">
										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> Cloud Based Services </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>

										<div class="about-block-two">
											<h5 class="title"><i class="icon fa fa-angle-right"></i> End to End Solutions </h5>
											<p class="text">Web designing in a powerful way of just</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Image Column -->
							<div class="image-column col-xl-5 col-lg-6 col-md-12">
								<figure class="image overlay-anim"><img src="assets/images/resource/work-1.jpg" alt=""></figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Section -->

	<!-- Project Section Three-->
	<section id="project" class="project-section-three">
		<div class="auto-container">
			<div class="sec-title light">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<span class="sub-title">recently Completed work</span>
						<h2>Improve & Enhance the <br>Tech Projects</h2>
					</div>
					<div class="col-lg-5 text-end btn-box">
						<a href="page-projects.php" class="theme-btn btn-style-one"><span class="btn-title">View all work</span></a>
					</div>
				</div>
			</div>

			<div class="carousel-outer">
				<!-- Prject Carousel -->
				<div class="project-carousel-three owl-carousel owl-theme">
					<!-- Project Block Three-->
					<div class="project-block-three">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-8.jpg" class="lightbox-image"><img src="assets/images/resource/project-8.jpg" alt=""></a></figure>
								<div class="overlay-box">
									<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
									<h4 class="title"><a href="page-project-details.php">Tech Solutions</a></h4>
									<span class="cat">DESIGN / IDEAS</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Project Block Three-->
					<div class="project-block-three">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-9.jpg" class="lightbox-image"><img src="assets/images/resource/project-9.jpg" alt=""></a></figure>
								<div class="overlay-box">
									<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
									<h4 class="title"><a href="page-project-details.php">Tech Solutions</a></h4>
									<span class="cat">DESIGN / IDEAS</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Project Block Three-->
					<div class="project-block-three">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-10.jpg" class="lightbox-image"><img src="assets/images/resource/project-10.jpg" alt=""></a></figure>
								<div class="overlay-box">
									<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
									<h4 class="title"><a href="page-project-details.php">Tech Solutions</a></h4>
									<span class="cat">DESIGN / IDEAS</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Project Block Three-->
					<div class="project-block-three">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-11.jpg" class="lightbox-image"><img src="assets/images/resource/project-11.jpg" alt=""></a></figure>
								<div class="overlay-box">
									<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
									<h4 class="title"><a href="page-project-details.php">Tech Solutions</a></h4>
									<span class="cat">DESIGN / IDEAS</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--End Project Section Three-->

	<!-- Why Choose Us Two-->
	<section class="why-choose-us-two pt-0">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">why choose our company</span>
							<h2>Why you Should Choose Our Services?</h2>
							<div class="text">There are many variations of passages of but the majority have in some form, by injected humou or words which don't look even slightly believable of but the majority have suffered.</div>
						</div>


						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="info-box">
									<i class="icon fa fa-check-circle"></i>
									<h6 class="title">Integer et massa sit</h6>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="info-box">
									<i class="icon fa fa-check-circle"></i>
									<h6 class="title">Integer et massa sit</h6>
								</div>
							</div>
						</div>

						<!--Skills-->
						<div class="skills">
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header">
									<h6 class="skill-title">Technology</h6>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="86">
											<div class="skill-percentage">
												<div class="count-box"><span class="count-text" data-speed="3000" data-stop="86">0</span>%</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header">
									<h6 class="skill-title">Solutions</h6>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="77">
											<div class="skill-percentage">
												<div class="count-box"><span class="count-text" data-speed="3000" data-stop="77">0</span>%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="image-box wow fadeInRight">
						<figure class="image overlay-anim">
							<img src="assets/images/resource/why-us-3.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-btn lightbox-image"><i class="icon fa fa-play"></i></a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd Why Choose Us -->

	<!-- Contact Section Three -->
	<section id="contact" class="contact-section-three pull-up">
		<div class="auto-container">
			<div class="row">
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12 order-2">
					<div class="inner-column wow fadeInRight">
						<div class="sec-title">
							<div class="sub-title">Get in Touch</div>
							<h2>Get a free quote today</h2>
							<div class="text">Web designing in a powerful way of just not an only professions, however, in a passion for our company</div>
						</div>
						<div class="contact-info-box-two">
							<span class="icon fa fa-map-marker-alt"></span>
							<h6 class="title">Visit Us</h6>
							<div class="text">66 Road Broklyn Street, 600 New York, USA</div>
						</div>
						<div class="contact-info-box-two">
							<span class="icon fa fa-envelope"></span>
							<h6 class="title">Email address</h6>
							<div class="text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></div>
						</div>
						<div class="contact-info-box-two">
							<span class="icon fa fa-phone"></span>
							<h6 class="title">Call now</h6>
							<div class="text"><a href="tel:+999000111222">+999 000 111 222</a></div>
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form-two style-two wow fadeInLeft">
							<!--Contact Form-->
							<form id="contact_form" name="contact_form" action="includes/sendmail.php" method="post">
								<div class="row">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="form_name" placeholder="Your Name" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="form_email" placeholder="Email Address" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="form_phone" placeholder="Phone Number" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="form_subject" placeholder="Subject" required>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Write Message" required></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input name="form_botcheck" class="form-control" type="hidden" value="" />
										<button type="submit" class="theme-btn btn-style-one hvr-light" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
									</div>
								</div>
							</form>
						</div>
						<!--End Contact Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Contact Section Three -->

	<!-- Pricing Section -->
	<section id="pricing" class="pricing-section">
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
									<a href="page-pricing.php" class="theme-btn btn-style-four"><span class="btn-title">Choose plan</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Offer Section Four -->

	<!-- Team Section -->
	<section id="team" class="team-section-ten">
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-4 col-lg-4 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">our Expart Members</span>
							<h2>Professional Expert Team</h2>
							<div class="text">There are many variations of passages of ipsum available, but the majority have suffered alteration in form.</div>
						</div>
					</div>
				</div>

				<!-- Carousel Column -->
				<div class="carousel-column col-xl-8 col-lg-8 col-md-12">
					<div class="carousel-outer">
						<div class="team-ten-carousel owl-carousel owl-theme">
							<div class="team-block-two">
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
							<div class="team-block-two ">
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
							<div class="team-block-two">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- News Section -->
	<section id="news" class="news-section">
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

	<!-- Call To Action Three -->
	<section class="call-to-action-three p-0">
		<div class="auto-container">
			<div class="outer-box">
				<div class="title-box">
					<span class="icon fa fa-network-wired"></span>
					<h5 class="title">Need IT solutions & services consultation?</h5>
				</div>
				<div class="btn-box">
					<a href="page-services.php" class="theme-btn btn-style-one"><span class="btn-title">get solution</span></a>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Three -->

	<!-- Map Section-->
	<section class="map-section alternate pull-up">
		<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
		</iframe>
	</section>
	<!--End Map Section-->

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