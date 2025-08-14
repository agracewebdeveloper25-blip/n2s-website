<?php 

    $css = '<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
                <link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
                <link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
                <link href="assets/css/style.css" rel="stylesheet">
                <link href="assets/css/style-dark.css" rel="stylesheet">';
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
                                        var form_btn = $(form).find("button[type=\'submit\']");
                                        var form_result_div = "#form-result";
                                        $(form_result_div).remove();
                                        form_btn.before("<div id=\'form-result\' class=\'alert alert-success\' role=\'alert\' style=\'display: none;\'></div>");
                                        var form_btn_old_msg = form_btn.html(); // Corrected
                                        form_btn.prop("disabled", true).html(form_btn.data("loading-text")); // Corrected

                                        $(form).ajaxSubmit({
                                            dataType: "json",
                                            success: function(data) {
                                                if (data.status == "true") {
                                                    $(form).find(".form-control").val("");
                                                }
                                                form_btn.prop("disabled", false).html(form_btn_old_msg); // Corrected
                                                $(form_result_div).html(data.message).fadeIn("slow"); // Corrected
                                                setTimeout(function() {
                                                    $(form_result_div).fadeOut("slow");
                                                }, 6000);
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
        <header class="main-header header-style-two">

            <!-- Header Top -->
            <?php include './partials/headertop.php'?>
            <!-- Header Top -->

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
            <?php include './partials/mobilemenu.php'?>
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
                            <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
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
            </div>
            <!-- End Sticky Menu -->
            
        </header>
        <!--End Main Header -->

        <!-- Banner Section Two-->
        <section class="banner-section">
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
        <section class="services-section-three">
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
        <section class="about-section-seven pt-0">
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
        <section class="contact-section-two pull-up layout_8">
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
        <section class="project-section alternate">
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
                                    <figure class="image"><a href="assets/images/resource/project-1.jpg" class="lightbox-image"><img src="assets/images/resource/project-1.jpg" alt=""></a></figure>
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
                                    <figure class="image"><a href="assets/images/resource/project-2.jpg" class="lightbox-image"><img src="assets/images/resource/project-2.jpg" alt=""></a></figure>
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
                                    <figure class="image"><a href="assets/images/resource/project-3.jpg" class="lightbox-image"><img src="assets/images/resource/project-3.jpg" alt=""></a></figure>
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
                                    <figure class="image"><a href="assets/images/resource/project-4.jpg" class="lightbox-image"><img src="assets/images/resource/project-4.jpg" alt=""></a></figure>
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
        <section class="pricing-section">
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
        <section class="news-section-two">
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