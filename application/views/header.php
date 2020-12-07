<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Artgallery</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boto Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fresco.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"/>
    <!-- icon -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/art-and-design.ico" type="image/icon type">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header Section -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md-3 order-2 order-sm-1">
					<!-- <div class="header__social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div> -->
				</div>
				<div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
					<a href="#">
						<h1><?= $title ?></h1>
                    </a>
				</div>
				<div class="col-sm-4 col-md-3 order-3 order-sm-3">
					<div class="header__switches">
					<a href="#" class="search-switch"><i class="fa fa-search"></i></a>
<!--					<a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
-->					</div>
				</div>
			</div>
			<nav class="main__menu">
				<ul class="nav__menu">
					<li><a href="<?= base_url("home/index/") ?>" >Home</a></li>
					<?php  if($this->session->userdata('username') == FALSE){?>
						<li><a href="<?= base_url("auth/index") ?>">Login</a></li>
					<?php } else  if($this->session->userdata('username') == TRUE){?>
					<li><a href="<?= base_url("auth/logout") ?>">Logout</a></li>
					<?php if($this->session->userdata('level', '1' )){?>
					<li><a href="<?= base_url("admin/index") ?>">Admin</a></li>
					<?php } else { ?>
						<li><a href="<?= base_url("favorit/index") ?>">Favorit</a></li>
					<?php }
							} ?>
					<!-- <li><a href="./blog.html">Blog</a>
						<ul class="sub__menu">
							<li><a href="<?= base_url("Artikel/index") ?>">Blog Single</a></li>
						</ul>
					</li>
					<li><a href="./contact.html">Contact</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header Section end -->
