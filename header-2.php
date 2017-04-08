<?php
/**
 * The header for our single-teardowns.php
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Website-teardown
 */

?>
<!doctype html>
<!--[if IE 7 ]>
<html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Website TearDown</title>

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">

	<!-- ICONS CSS -->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<!-- THEME STYLES CSS -->
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/vendor/slick/slick.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/vendor/lity/lity.min.css">
	<link rel="stylesheet" href="css/main.css">

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper wrapper-single">
	<div class="side-nav">
		<div class="side-nav-inner">
			<a href="#1" class="page-scroll"><span data-toggle="tooltip" title="Teardown overview" data-placement="bottom">1</span> Teardown overview</a>
			<a href="#2" class="page-scroll"><span data-toggle="tooltip" title="Teardown screenshots" data-placement="bottom">2</span> Teardown screenshots</a>
			<a href="#3" class="page-scroll"><span data-toggle="tooltip" title="Teardown data" data-placement="bottom">3</span> Teardown data</a>
			<a href="#4" class="page-scroll"><span data-toggle="tooltip" title="Website scores" data-placement="bottom">4</span> Website scores</a>
			<a href="#5" class="page-scroll"><span data-toggle="tooltip" title="Teardown participants" data-placement="bottom">5</span> Teardown participants</a>
			<a href="#6" class="page-scroll"><span data-toggle="tooltip" title="Comments" data-placement="bottom">6</span> Comments</a>
		</div>
	</div>
	<!-- HEADER -->
	
	<!-- MENU -->
	<nav class="navbar navbar-default navbar-scroll">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar2">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt=""/></a>
			</div>
			<div class="pull-right logreg">
				<a href="#" class="login"><span class="hidden visible-pm"><i class="fa fa-sign-in"></i></span> <span class="hide-pm">Sign in</span></a>
				<a href="#" class="submit-website hidden-xs">Submit a website</a>
			</div>
			<div id="navbar2" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="<?php echo get_home_url(); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span><i class="fa fa-angle-down"></i></span></a>
						<ul class="dropdown-menu">
							<li><a href="./index.php">Homepage 1</a></li>
							<li><a href="./home2.html">Homepage 2</a></li>
							<li><a href="./home3.html">Homepage 3</a></li>
						</ul>
					</li>
					<li><a href="./testimonials.html">Pricing</a></li>
					<li><a href="./pricing.html">FAQ</a></li>
					<li><a href="./pricing.html">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>