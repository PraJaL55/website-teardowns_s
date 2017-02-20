<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Website-teardown
 */

?><!DOCTYPE html>
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
<!--	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11"> -->

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- THEME STYLES CSS -->
	<!--<link rel="stylesheet" href="/wp-content/themes/website-teardowns/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wp-content/themes/website-teardowns/js/vendor/slick/slick.css">
	<link rel="stylesheet" href="/wp-content/themes/website-teardowns/css/animate.css">
	<link rel="stylesheet" href="/wp-content/themes/website-teardowns/js/vendor/lity/lity.min.css">
	<link rel="stylesheet" href="/wp-content/themes/website-teardowns/css/main.css">

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
	
<?php wp_head(); ?>
</head>

<body <?php body_class( 'home' ); ?>>
	<!--<div id="page" class="site">-->
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'website-teardown' ); ?></a>-->
	
	<div class="wrapper">

	<!-- HEADER -->
	<header>
		<!-- MENU -->
		<nav class="navbar navbar-default navbar-main hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div id="navbar" class="navbar-collapse collapse pull-left">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span><i class="fa fa-angle-down"></i></span></a>
									<ul class="dropdown-menu">
										<li><a href="./index.html">Homepage 1</a></li>
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
					<div class="col-md-2">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" class="img-responsive" alt=""/></a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="pull-right logreg">
							<a href="#" class="login">Sign in</a>
							<a href="#" class="submit-website">Submit a website</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
	<!-- MENU -->
	<nav class="navbar navbar-default navbar-scroll">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar2">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt=""/></a>
			</div>
			<div class="pull-right logreg">
				<a href="#" class="login"><span class="hidden visible-pm"><i class="fa fa-sign-in"></i></span> <span class="hide-pm">Sign in</span></a>
				<a href="#" class="submit-website hidden-xs">Submit a website</a>
			</div>
			<div id="navbar2" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span><i class="fa fa-angle-down"></i></span></a>
						<ul class="dropdown-menu">
							<li><a href="./index.html">Homepage 1</a></li>
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


<!--	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>--><!-- .site-branding -->

	<!--	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'website-teardown' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>--><!-- #site-navigation -->
<!--	</header>--><!-- #masthead -->

		<!--<div id="content" class="site-content">-->
