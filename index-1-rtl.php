<!DOCTYPE html>
<html lang="en" dir="rtl">

<?php 
	$css = '<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
				<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
				<link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
				<link href="assets/css/style-rtl.css" rel="stylesheet">';
	$script = '<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
				<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
				<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
				<script src="assets/js/main-slider-script.js"></script>';
	$script2 = '<script src="assets/js/jquery.validate.min.js"></script>
				<script src="assets/js/jquery.form.min.js"></script>
				<script>
						(function($) {
							$("#contact_form").validate({
								submitHandler: function(form) {
									var form_btn = $(form).find(\'button[type="submit"]\');
									var form_result_div = \'#form-result\';
									$(form_result_div).remove();
									form_btn.before(\'<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>\');
									var form_btn_old_msg = form_btn.html(); // Corrected
									form_btn.prop(\'disabled\', true).html(form_btn.data("loading-text")); // Corrected

									$(form).ajaxSubmit({
										dataType:  \'json\',
										success: function(data) {
											if( data.status == \'true\' ) {
												$(form).find(\'.form-control\').val(\'\');
											}
											form_btn.prop(\'disabled\', false).html(form_btn_old_msg); // Corrected
											$(form_result_div).html(data.message).fadeIn(\'slow\'); // Corrected
											setTimeout(function(){ $(form_result_div).fadeOut(\'slow\') }, 6000);
										}
									});
								}
							});
						})(jQuery);
				</script>';
	$header ='false';				  
	$footer ='false';
	$maincontent ='false';
?>


<?php include './layout/layout-top.php'?>

	<!-- Main Header-->
	<header class="main-header header-style-two-new">
		<!-- Main box -->
		<div class="main-box">
			<div class="logo-box">
				<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title="Tronis"></a></div>
				<button class="ui-btn ui-btn search-btn">
					<span class="icon lnr lnr-icon-search"></span>
				</button>
			</div>

			<!--Nav Box-->
			<div class="nav-outer">
				<nav class="nav main-menu">
					<ul class="navigation">
						<li class="current dropdown"><a href="index.php">بيت</a>
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
							</ul>
						</li>
						<li class="dropdown"><a href="page-about.php">الصفحات</a>
							<ul>
								<li><a href="page-about.php">About</a></li>
								<li class="dropdown"><a href="page-team.php">Team</a>
									<ul>
										<li><a href="page-team.php">Team Grid</a></li>
										<li><a href="page-team-details.php">Team Details</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="shop-products.php">Shop</a>
									<ul>
										<li><a href="shop-products.php">Products</a></li>
										<li><a href="shop-products-sidebar.php">Products with Sidebar</a></li>
										<li><a href="shop-product-details.php">Product Details</a></li>
										<li><a href="shop-cart.php">Cart</a></li>
										<li><a href="shop-checkout.php">Checkout</a></li>
									</ul>
								</li>
								<li><a href="page-testimonial.php">Testimonial</a></li>
								<li><a href="page-pricing.php">Pricing</a></li>
								<li><a href="page-faq.php">FAQ</a></li>
								<li><a href="page-404.php">Page 404</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="page-services.php">خدمات</a>
							<ul>
								<li><a href="page-services.php">Services Grid</a></li>
								<li><a href="page-service-details.php">Service Details</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="page-projects.php">مَلَفّ</a>
							<ul>
								<li><a href="page-projects.php">Portfolio Grid</a></li>
								<li><a href="page-project-details.php">Portfolio Details</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="news-grid.php">أخبار</a>
							<ul>
								<li><a href="news-grid.php">News Grid</a></li>
								<li><a href="news-details.php">News Details</a></li>
							</ul>
						</li>
						<li><a href="page-contact.php">اتصال</a></li>
					</ul>
				</nav>
				<!-- Main Menu End-->
			</div>

			<div class="outer-box">
				<a href="tel:+91(9999)9999" class="info-btn-two">
					<i class="icon fa fa-phone"></i>
					<small>اتصل في أي وقت</small><br/> +٩٢(٨٨٠٠)٦٨٩٠
				</a>

				<a class="theme-btn btn-style-two" href="page-contact.php"><span class="btn-title">إقتبس</span></a>

				<!-- Mobile Nav toggler -->
				<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
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
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="index.php" title=""><img src="assets/images/logo-2.png" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
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

	<!--Main Slider-->
	<section class="main-slider">
		<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
			<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
				<ul>
					<!-- Slide 1 -->
					<li data-index="rs-1" data-transition="zoomout">
						<!-- MAIN IMAGE -->
						<img src="assets/images/main-slider/1.jpg" alt="" class="rev-slidebg">

						<div class="tp-caption tp-resizeme rs-parallaxlevel-3 hidden-mobile"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-270','-190','-60','-190']"
						data-voffset="['160','160','180','160']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="assets/images/main-slider/arrow.png" alt=""></figure>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','650']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-190','-190','-190','-200']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<span class="title">حلول لأعمالك</span>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','650']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-50','-50','-50','-80']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<h1>حلول تكنولوجيا المعلومات  <br/> <span class="color1">&</span>خدمات</h1>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['90','90','90','65']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<div class="text">هناك العديد من مقاطع لوريم إيبسوم، ولكن يوجد بها مقاطع رئيسية  <br /> عانى من التغيير في شكل ما.</div>
						</div>


						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['700','750','700','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['185','185','200','185']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">إكتشف أكثر</span></a>
						</div>
					</li>

					<!-- Slide 2 -->
					<li data-index="rs-2" data-transition="zoomin">
						<!-- MAIN IMAGE -->
						<img src="assets/images/main-slider/2.jpg" alt="" class="rev-slidebg">

						<div class="tp-caption tp-resizeme rs-parallaxlevel-3 hidden-mobile"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="shape"
						data-height="none"
						data-whitespace="nowrap"
						data-width="none"
						data-hoffset="['-270','-190','-60','-190']"
						data-voffset="['160','160','180','160']"
						data-x="['center','center','center','center']"
						data-y="['middle','middle','middle','middle']"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<figure><img src="assets/images/main-slider/arrow.png" alt=""></figure>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','650']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-190','-190','-190','-200']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<span class="title">حلول لأعمالك</span>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','650']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['-50','-50','-50','-80']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<h1>حلول تكنولوجيا المعلومات <br /><span class="color1">&</span> تكنولوجيا</h1>
						</div>

						<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['820','750','750','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['90','90','90','65']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<div class="text">هناك العديد من مقاطع لوريم إيبسوم، ولكن يوجد بها مقاطع رئيسية<br/> عانى من التغيير في شكل ما.</div>
						</div>


						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['700','750','700','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['185','185','200','185']"
						data-x="['right','right','right','right']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<a href="page-about.php" class="theme-btn btn-style-one"><span class="btn-title">إكتشف أكثر</span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Main Slider-->

	<!-- About Section -->
	<section class="about-section-six pt-0 pb-70">
		<!-- Features Section -->
		<div class="features-section pull-up pt-0">
			<div class="auto-container">
				<div class="outer-box">
					<div class="row justify-content-center">
						<!-- Service Block Two -->
						<div class="service-block-three col wow fadeInUp">
							<div class="inner-box ">
								<i class="icon flaticon-business-002-graph"></i>
								<h6 class="title"><a href="page-service-details.php">منتج <br/>تطوير</a></h6>
								<div class="text">توفير الحلول للأعمال التقنية</div>
							</div>
						</div>

						<!-- Service Block Two -->
						<div class="service-block-three col wow fadeInUp" data-wow-delay="200ms">
							<div class="inner-box ">
								<i class="icon flaticon-business-010-startup"></i>
								<h6 class="title"><a href="page-service-details.php">رقمي <br/>تسويق</a></h6>
								<div class="text">توفير الحلول للأعمال التقنية</div>
							</div>
						</div>

						<!-- Service Block Two -->
						<div class="service-block-three col wow fadeInUp" data-wow-delay="400ms">
							<div class="inner-box ">
								<i class="icon flaticon-business-030-settings"></i>
								<h6 class="title"><a href="page-service-details.php">حماية <br/>نظام</a></h6>
								<div class="text">توفير الحلول للأعمال التقنية</div>
							</div>
						</div>

						<!-- Service Block Two -->
						<div class="service-block-three col wow fadeInUp" data-wow-delay="600ms">
							<div class="inner-box ">
								<i class="icon flaticon-business-045-stationery"></i>
								<h6 class="title"><a href="page-service-details.php">واجهة المستخدم/تجربة المستخدم <br/>تصميم</a></h6>
								<div class="text">توفير الحلول للأعمال التقنية</div>
							</div>
						</div>

						<!-- Service Block Two -->
						<div class="service-block-three col wow fadeInUp" data-wow-delay="800ms">
							<div class="inner-box">
								<i class="icon flaticon-business-054-graph"></i>
								<h6 class="title"><a href="page-service-details.php">بيانات <br/>تحليل</a></h6>
								<div class="text">توفير الحلول للأعمال التقنية</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Features Section-->
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
					data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">بالنسبه لشركتنا</span>
							<h2>قم دائمًا بتسليم أكثر مما توقعت</h2>
							<div class="text">Sed لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو ي</div>
						</div>

						<div class="content-box">
							<div class="about-block-four">
								<i class="icon flaticon-business-018-startup"></i>
								<h5 class="title">نهاية إلى نهاية التنمية </h5>
								<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة و</div>
							</div>

							<div class="about-block-four">
								<i class="icon flaticon-business-027-world"></i>
								<h5 class="title">الاستعانة بمصادر خارجية لتكنولوجيا المعلومات للبرمجيات</h5>
								<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة و</div>
							</div>

							<ul class="list-style-three">
								<li>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوط</li>
								<li>لكن لا بد أن أوضح لك أن كل هذه الأفكار</li>
							</ul>
						</div>

						<div class="btm-box">
							<a href="page-about.php" class="theme-btn btn-style-three"><span class="btn-title">إكتشف أكثر</span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<div class="image-box">
							<figure class="image wow fadeIn"><img src="assets/images/resource/men.png" alt=""></figure>
							<div class="completed-projects">
								<strong>٨٧٠+</strong>
								<div class="text">تم المشروع</div>
							</div>
							<div class="experience bounce-y">
								<strong>٢٥</strong>
								<div class="text">سنوات من <br/>خبرة</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Services Section Four -->
	<section class="services-section-four">
		<div class="anim-icons">
			<span class="icon icon-lines-9-top bounce-x"></span>
			<span class="icon icon-dots-9-top bounce-y"></span>
		</div>
		<div class="auto-container">
			<div class="row">
				<!-- Service Block Four -->
				<div class="sec-title col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
					<span class="sub-title">الخدمات التي نقدمها</span>
					<h2>نقدّم خدمات كاملة النطاق</h2>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-012-startup"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">رقمي <br/>تسويق</a></h5>
						<div class="text">توفير الحلول للأعمال التقنية</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-046-like"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">حماية <br/>نظام</a></h5>
						<div class="text">توفير الحلول للأعمال التقنية</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-006-target"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">واجهة المستخدم/تجربة المستخدم <br/>تصميم</a></h5>
						<div class="text">توفير الحلول للأعمال التقنية</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-006-target"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">واجهة المستخدم/تجربة المستخدم <br/>تصميم</a></h5>
						<div class="text">توفير الحلول للأعمال التقنية</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="service-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box ">
						<div class="icon-box">
							<i class="icon flaticon-business-006-target"></i>
						</div>
						<h5 class="title"><a href="page-service-details.php">واجهة المستخدم/تجربة المستخدم <br/>تصميم</a></h5>
						<div class="text">توفير الحلول للأعمال التقنية</div>
					</div>
				</div>

				<!-- Service Block Four -->
				<div class="short-banner-six col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="banner-inner">
						<p>احصل على حلول تكنولوجيا المعلومات الخاصة بك</p>
						<h4>لا تضيعوا ثانية! اتصل بنا لحل أي حلول تكنولوجيا معلومات لديك</h4>
						<a href="page-projects.php" class="theme-btn btn-style-two"><span class="btn-title">ابحث عن الحل الخاص بك</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Four-->

	<!-- Project Section -->
	<section class="project-section style-two pb-0">
		<div class="auto-container">
			<div class="sec-title light">
				<div class="row">
					<div class="col-lg-7">
						<span class="sub-title">تم الانتهاء من العمل مؤخرا</span>
						<h2>تحسين وتعزيز <br/>أفضل المشاريع التقنية</h2>
					</div>
					<div class="col-lg-5">
						<div class="text">هناك العديد من الاختلافات في المقاطع المتاحة ولكن الأغلبية عانت من التغيير بشكل ما، عن طريق الفكاهة أو الكلمات العشوائية التي لا تبدو قابلة للتصديق ولو قليلاً.</div>
					</div>
				</div>
			</div>

			<div class="carousel-outer">
				<!-- Prject Carousel -->
				<div class="project-carousel owl-carousel owl-theme">
					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-1.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-1.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الحلول التقنية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-2.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-2.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الرؤى الذكية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-3.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-3.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تكامل المنصة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-4.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-4.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تطوير الشبكة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-1.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-1.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الحلول التقنية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-2.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-2.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الرؤى الذكية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-3.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-3.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تكامل المنصة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-4.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-4.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تطوير الشبكة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-1.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-1.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الحلول التقنية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-2.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-2.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">الرؤى الذكية</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-3.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-3.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تكامل المنصة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>

					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="assets/images/resource/project-4.jpg" class="lightbox-image">
									<img src="assets/images/resource/project-4.jpg" alt=""></a>
								</figure>
								<a href="page-project-details.php" class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
							<div class="content-box">
								<h4 class="title"><a href="page-project-details.php">تطوير الشبكة</a></h4>
								<span class="cat">التصميم / الأفكار</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Project Section -->

	<!-- Fun Fact Section -->
	<section class="fun-fact-section">
		<div class="auto-container">
			<div class="fact-counter">
				<div class="row">
					<!-- Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
						<div class="inner">
							<i class="icon flaticon-business-060-graph"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="4520">0</span></div>
							<h6 class="counter-title">اكتمل المشروع</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
						<div class="inner">
							<i class="icon flaticon-business-035-helpline"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="326">0</span></div>
							<h6 class="counter-title">متخصصون في تكنولوجيا المعلومات</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
						<div class="inner">
							<i class="icon flaticon-business-020-hierarchy"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="8600">0</span></div>
							<h6 class="counter-title">عملاء راضون</h6>
						</div>
					</div>

					<!--Counter block-->
					<div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
						<div class="inner">
							<i class="icon flaticon-business-048-coin"></i>
							<div class="count-box"><span class="count-text" data-speed="3000" data-stop="238">0</span></div>
							<h6 class="counter-title">حلول ذكية</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Fun Fact Section -->

	<!-- Why Choose Us Two-->
	<section class="why-choose-us-four">
		<div class="auto-container">
			<div class="row align-items-lg-center">
				<div class="content-column col-xl-5 col-lg-7 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">لماذا تختار شركتنا</span>
							<h2>لماذا تختار خدمات تكنولوجيا المعلومات لدينا</h2>
							<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالف</div>
						</div>

						<div class="content-box pe-lg-5">
							<div class="whychose-block-four">
								<i class="icon flaticon-business-018-startup"></i>
								<h5 class="title">أسعار الخدمة معقولة</h5>
								<div class="text">لقد صممنا ثقافة تسمح لمضيفينا بالاندماج</div>
							</div>

							<div class="whychose-block-four">
								<i class="icon flaticon-business-012-startup"></i>
								<h5 class="title">الشبكات الداخلية</h5>
								<div class="text">لقد صممنا ثقافة تسمح لمضيفينا بالاندماج.</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-7 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight">
						<figure class="image overlay-anim">
							<img src="assets/images/background/bg2.jpg" alt="">
							<div class="video-box video-box-home1 wow fadeInUp">
								<div class="content">
									<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now-two lightbox-image"><i class="icon fa fa-play"></i></a>
								</div>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd Why Choose Us -->

	<!-- Team Section -->
	<section class="team-section">
		<div class="anim-icons">
			<span class="icon icon-lines bounce-x"></span>
			<span class="icon icon-dots bounce-y"></span>
		</div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">تعليقاتك</span>
				<h2>الخبراء على استعداد للبقاء</h2>
			</div>

			<div class="row">
				<!-- Team block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-1.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">كيفن هاردسون</a></h5>
							<span class="designation">مصمم</span>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-2.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">جيسيكا براون</a></h5>
							<span class="designation">مطور</span>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.php"><img src="assets/images/resource/team-3.jpg" alt=""></a></figure>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.php">مايكل سميث</a></h5>
							<span class="designation">شريك مؤسس</span>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
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

	<!-- Call To Action Two -->
	<section class="call-to-action" style="background-image: url(assets/images/background/1.jpg)">
		<div class="auto-container">
			<div class="title-box">
				<div class="icon bounce-y"><img src="assets/images/resource/icon-logo.png" alt=""></div>
				<h1 class="title">حلول وخدمات تكنولوجيا المعلومات <br/>في متناول يدك</h1>
				<a href="page-services.php" class="theme-btn btn-style-one"><span class="btn-title">إكتشف أكثر</span></a>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->

	<!-- Testimonial Section Three -->
	<section class="testimonial-section-four pb-0">
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-5 col-lg-6 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">ردود الفعل لدينا</span>
							<h2>ما يتحدثون عنا</h2>
							<div class="text">هناك العديد من الاختلافات في المقاطع، وقد عانت الأغلبية من التغيير في بعض الفكاهة المحقونة، أو الكلمات العشوائية القابلة للتصديق.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Column -->
				<div class="testimonial-column col-xl-7 col-lg-6 col-md-12">
					<div class="carousel-outer">
						<div class="testimonial-bg" style="background-image: url(assets/images/resource/testimonial-bg.png)"></div>
						<div class="testimonial-carousel-four owl-carousel owl-theme">

							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأس</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-3.jpg" alt=""></figure>
										<h5 class="name">جيسيكا براون</h5>
										<span class="designation">شريك مؤسس</span>
									</div>
								</div>
							</div>

							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأس</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-3.jpg" alt=""></figure>
										<h5 class="name">جيسيكا براون</h5>
										<span class="designation">شريك مؤسس</span>
									</div>
								</div>
							</div>

							<!-- Testimonial Block Four -->
							<div class="testimonial-block-four">
								<div class="inner-box">
									<div class="content-box">
										<span class="icon icon-quote"></span>
										<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
										<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل لتكتشف حقيقة وأس</div>
									</div>
									<div class="info-box">
										<figure class="thumb"><img src="assets/images/resource/testi-thumb-3.jpg" alt=""></figure>
										<h5 class="name">جيسيكا براون</h5>
										<span class="designation">شريك مؤسس</span>
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

	<!-- Clients Section   -->
	<section class="clients-section">
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

	<!-- FAQ Section -->
	<section class="faqs-section style-two">
		<div class="auto-container">
			<div class="row">
				<!-- FAQ Column -->
				<div class="faq-column col-xl-6 col-lg-12 col-md-12 order-4">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">أسئلة و أجوبة</span>
							<h2>راجع الأسئلة المتداولة</h2>
						</div>

						<ul class="accordion-box wow fadeInRight">
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn">
									هل التكنولوجيا الخاصة بي مسموحة في التكنولوجيا؟
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">هناك العديد من الاختلافات في المقاطع، وقد عانت الأغلبية من التغيير في بعض الفكاهة المحقونة، أو الكلمات العشوائية القابلة للتصديق.</div>
									</div>
								</div>
							</li>
							<!--Block-->
							<li class="accordion block active-block">
								<div class="acc-btn active">كيف تطلق مشروعك بشكل سلس؟
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">هناك العديد من الاختلافات في المقاطع، وقد عانت الأغلبية من التغيير في بعض الفكاهة المحقونة، أو الكلمات العشوائية القابلة للتصديق.</div>
									</div>
								</div>
							</li>
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn">كيفية تحويل الزوار إلى مساهمين
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">هناك العديد من الاختلافات في المقاطع، وقد عانت الأغلبية من التغيير في بعض الفكاهة المحقونة، أو الكلمات العشوائية القابلة للتصديق.</div>
									</div>
								</div>
							</li>
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn">كيف يمكنني العثور على حلولي؟
									<div class="icon fa fa-plus"></div>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">هناك العديد من الاختلافات في المقاطع، وقد عانت الأغلبية من التغيير في بعض الفكاهة المحقونة، أو الكلمات العشوائية القابلة للتصديق.</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!-- image Column -->
				<div class="image-column col-xl-6 col-lg-12 col-md-12 mb-xl-0">
					<div class="inner-column">
						<figure class="image"><img src="assets/images/resource/faq.jpg" alt=""></figure>
						<div class="info-box">
							<div class="inner">
								<span class="icon flaticon-business-063-diamond"></span>
								<h3 class="title">حل تكنولوجيا المعلومات الموثوق به<br/> ووكالة الأعمال الخدمية</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End FAQ Section -->

	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">من المدونة</span>
				<h2>مقالات إخبارية</h2>
			</div>
			<div class="row">
				<!-- News Block -->
				<div class="news-block-three col-lg-4 col-md-6 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-1.jpg" alt=""></a></figure>
							<span class="date">٣١ أغسطس, ٢٠٢٣</span>
						</div>
						<div class="content-box">
							<h4 class="title"><a href="news-details.php"> حلول تكنولوجيا المعلومات المبتكرة للشركات الحديثة</a></h4>
							<ul class="post-info">
								<li><i class="fa fa-user"></i> بواسطة المشرف</li>
								<li class="comments"><i class="fa fa-comments"></i> تعليقات</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="news-block-three col-lg-4 col-md-6 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-2.jpg" alt=""></a></figure>
							<span class="date">٣٠ سبتمبر, ٢٠٢٣</span>
						</div>
						<div class="content-box">
							<h4 class="title"><a href="news-details.php"> أدوات تكنولوجيا المعلومات المتطورة التي لا يمكنك تفويتها</a></h4>
							<ul class="post-info">
								<li><i class="fa fa-user"></i> بواسطة المشرف</li>
								<li class="comments"><i class="fa fa-comments"></i> تعليقات</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- News Block -->
				<div class="news-block-three col-lg-4 col-md-6 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.php"><img src="assets/images/resource/news-3.jpg" alt=""></a></figure>
							<span class="date">٣١ أكتوبر, ٢٠٢٣</span>
						</div>
						<div class="content-box">
							<h4 class="title"><a href="news-details.php">حلول تكنولوجيا المعلومات تدفع قادة الصناعة إلى الأمام</a></h4>
							<ul class="post-info">
								<li><i class="fa fa-user"></i> بواسطة المشرف</li>
								<li class="comments"><i class="fa fa-comments"></i> تعليقات</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End News Section -->

	<!-- Contact Section -->
	<section class="contact-four-section">
		<div class="auto-container">
			<div class="row">
				<!-- map Column -->
				<div class="map-column col-lg-6">
					<div class="row align-items-center">
						<!-- Title Column -->
						<div class="title-column col-lg-8">
							<div class="inner-column">
								<div class="sec-title">
									<span class="sub-title">اتصل بنا</span>
									<h2>هل تحتاج إلى حل لتكنولوجيا المعلومات؟</h2>
									<div class="text">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وت</div>
								</div>
							</div>
						</div>						
						<!-- Title Column -->
						<div class="column col-lg-4">
							<div class="inner-column">
								<div class="icon">
									<a href="#"><i class="fa fa-phone"></i></a>
									<h5>الخدمة متاحة</h5>
								</div>
							</div>
						</div>
					</div>
					<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-6">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form-four wow fadeInLeft">
							<div class="title-box">
								<h3 class="text-white text-capitalize">اطلب اقتباس</h3>
							</div>
							<!--Contact Form-->
							<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
								<div class="form-group">
									<input name="form_name" class="form-control" type="text" placeholder="اسمك">
								</div>
								<div class="form-group">
									<input name="form_email" class="form-control required email" type="email" placeholder="عنوان البريد الإلكتروني">
								</div>
								<div class="form-group">
									<input name="form_phone" class="form-control" type="text" placeholder="رقم التليفون">
								</div>
								<div class="form-group">
									<textarea name="form_message" class="form-control required" rows="7" placeholder="اكتب رسالة"></textarea>
								</div>
								<div class="form-group">
									<input name="form_botcheck" class="form-control" type="hidden" value="" />
									<button type="submit" class="theme-btn btn-style-two hvr-light" data-loading-text="Please wait..."><span class="btn-title">ارسل رسالة</span></button>
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

	<!-- Call To Action Two -->
	<section class="call-to-action-two p-0">
		<div class="auto-container">
			<div class="outer-box wow fadeIn">
				<!-- Image Box -->
				<div class="image-box">
					<figure class="image"><img src="assets/images/resource/image-2.jpg" alt=""></figure>
				</div>
				<!-- Content Box -->
				<div class="content-box">
					<div class="title-box">
						<h3 class="title">نحن جاهزون <br/>تطوير موقعك!</h3>
					</div>
					<div class="btn-box">
						<a href="page-about.php" class="theme-btn btn-style-two hvr-light"><span class="btn-title">المزيد من الخدمات</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->

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
							<div class="text">يرغب في الحصول على الألم في حد ذاته، لأنه ألم، ولكن في بعض الأحيان ظروف.</div>
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
							<h3 class="widget-title">يستكشف</h3>
							<ul class="user-links">
								<li><a href="#">عن الشركة</a></li>
								<li><a href="#">قابل الفريق</a></li>
								<li><a href="#">وسائل الإعلام</a></li>
								<li><a href="#">مشاريعنا</a></li>
								<li><a href="#">اتصال</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget contact-widget">
							<h3 class="widget-title">اتصال</h3>
							<div class="widget-content">
								<div class="text">٦٦ طريق شارع بروكلين, ٦٠٠ نيويورك، الولايات المتحدة الأمريكية</div>
								<ul class="contact-info">
									<li><i class="fa fa-envelope"></i> <a href="mailto:needhelp@yourdomain.com">تحتاج مساعدة@شركة.كوم</a><br/></li>
									<li><i class="fa fa-phone-square"></i> <a href="tel:+910000000000">+٩٢ ٦٦٦ ٨٨٨ ٠٠٠٠</a><br/></li>
								</ul>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget gallery-widget">
							<h3 class="widget-title">صالة عرض</h3>
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
					<div class="copyright-text">&copy; حقوق الطبع والنشر محفوظة بواسطة <a href="index.php">شركة.كوم</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

    <?php include './partials/script.php'?>

</body>
</html>