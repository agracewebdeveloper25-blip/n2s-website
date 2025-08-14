<!DOCTYPE html>
<html lang="en">

<?php $css = '<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
			  <link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
			  <link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
              <link href="assets/css/style.css" rel="stylesheet">';?>
<?php include './partials/head.php'?>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
    <?php include './partials/preloader.php'?>

	<!-- 404 Section -->
	<section class="">
		<div class="auto-container pt-120 pb-70">
			<div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                        	<img src="assets/images/resource/404.jpg" alt="">
                            <h3 class="error-page__sub-title">Page not found!</h3>
                        </div>
                        <p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
                            was never existed.</p>
                        <form class="error-page__form">
                            <div class="error-page__form-input">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="lnr lnr-icon-magnifier"></i></button>
                            </div>
                        </form>
                        <a href="index.php" class="theme-btn btn-style-one shop-now"><span class="btn-title">Back to Home</span></a>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!--End 404 Section -->

</div><!-- End Page Wrapper -->


<!-- Scroll To Top -->
<?php include './partials/script.php'?>

</html>