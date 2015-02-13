<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package smashburger
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7448754/657486/css/fonts.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php wp_head(); ?>
<!--[if lt IE 10]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/ie9-and-down.css' ?>" />
<![endif]-->
<!--[if IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
	<div id="page" class="hfeed site inner-wrap">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'smashburger' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="top-bar tab-bar" data-topbar role="navigation">

			 <section class="left-small hide-for-large-up">
	        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
	      </section>
				
				<!-- <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'smashburger' ); ?></button> -->
				<section class="top-bar-section clear">
					<ul class="title-area middle tab-bar-section">
						<li class="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/logo.svg'; ?>" width="100%"></a></li>
					</ul>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'clear', 'menu_class' => 'right show-for-large-up' , 'walker' => new top_bar_walker()) ); ?>
				</section>
			</nav><!-- #site-navigation -->
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
					} ?>
		</header><!-- #masthead -->
		<aside class="left-off-canvas-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'off-canvas-list' ) ); ?>
    </aside>
		<div id="content" class="site-content">
