<?php
	include "functions.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
<header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?= get_url(); ?>"><img src="img/LogoMakr.png" alt="" style="height:130px"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="<?php get_url(); ?>">Home</a></li> 
								<!-- <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>  -->
								<!-- <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>  -->
								<!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
										<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
									</ul>
								</li>  -->
								<li class="nav-item submenu dropdown">
									<a href="<?= get_url("blog.php") ?>" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<!--	<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li> 
									</ul> -->
								</li> 
								<li class="nav-item"><a class="nav-link" href="<?= get_url("contact.php"); ?>">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= get_url("register.php"); ?>">
									<button class="btn btn-danger">register</button>
									</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= get_url("login.php"); ?>"><button class="btn btn-success">login</button></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
		</header>
		

	