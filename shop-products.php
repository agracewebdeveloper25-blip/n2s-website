<?php 
	$css = '<link href="assets/css/style.css" rel="stylesheet">';
	$script = '<script src="assets/js/jquery.fancybox.js"></script>
				<script src="assets/js/jquery-ui.js"></script>
				<script src="assets/js/jquery.countdown.js"></script>
				<script src="assets/js/mixitup.js"></script>';
	$title = 'Shop';
	$subTitle = 'Products';
?>
<?php include './layout/layout-top.php'?>

	<!-- Featured Products -->
	<section class="featured-products">
		<span class="bg-shape"></span>

		<div class="auto-container">

			<!--MixitUp Galery-->
			<div class="mixitup-gallery">
				<!--Filter-->
				<div class="filters clearfix">
					<ul class="filter-tabs filter-btns clearfix">
						<li class="active filter" data-role="button" data-filter="all">All</li>
						<li class="filter" data-role="button" data-filter=".dairy">Cyber</li>
						<li class="filter" data-role="button" data-filter=".pantry">Digital</li>
						<li class="filter" data-role="button" data-filter=".meat">Software</li>
						<li class="filter" data-role="button" data-filter=".fruit">Technology</li>
						<li class="filter" data-role="button" data-filter=".vagetables">Development</li>
					</ul>
				</div>

				<div class="filter-list row">
					<!--Product Block-->
					<div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/1.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Headphone</a></h4>
								<span class="price">$32.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix dairy meat fruit col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/2.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Lagage</a></h4>
								<span class="price">$52.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix pantry fruit vagetables col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/3.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Watch</a></h4>
								<span class="price">$42.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix dairy meat vagetables col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/4.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Headset</a></h4>
								<span class="price">$22.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix pantry meat fruit col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/5.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Battery</a></h4>
								<span class="price">$34.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix dairy pantry col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/6.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">Charger</a></h4>
								<span class="price">$25.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix fruit vagetables col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/7.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">USB Cable</a></h4>
								<span class="price">$20.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>

					<!--Product Block-->
					<div class="product-block all mix dairy pantry meat vagetables col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image"><a href="shop-product-details.php"><img src="assets/images/resource/products/8.jpg" alt=""/></a></div>
							<div class="content">
								<h4><a href="shop-product-details.php">SD Card</a></h4>
								<span class="price">$40.00</span>
								<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
							</div>
							<div class="icon-box">
								<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
								<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Featured Products -->

<?php include './layout/layout-bottom.php'?>