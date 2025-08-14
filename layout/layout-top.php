<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php'?>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
    <?php include './partials/preloader.php'?>

	<!-- Main Header-->
	<?php 
		if (!isset($header)) {
			include './partials/header.php';
		}
    ?>
	<!--End Main Header -->

	<!-- Start main-content -->
	<?php 
		if (!isset($maincontent)) {
			include './partials/maincontent.php';
		}
    ?>
	<!-- end main-content -->