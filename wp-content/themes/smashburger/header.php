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
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php wp_head(); ?>
<!--[if lt IE 10]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/ie9-and-down.css' ?>" />
<![endif]-->
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8977996-1', 'auto');
  ga('send', 'pageview');

</script>
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
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<nav class="breadcrumbs hide-for-medium-down">','</nav>');
					} ?>
			</nav><!-- #site-navigation -->
				
		</header><!-- #masthead -->
		<aside class="left-off-canvas-menu">
        <?php wp_nav_menu( array( 'menu' => 'mobile', 'menu_class' => 'off-canvas-list' ) ); ?>
    </aside>
    <article id="pop">
    	<div class="modal clear show-for-medium-up hide">
    		<span class="x-out">x</span>
    		<div class="small-4 column">
    			<ul class="white-text">
    				<li>NICK JONAS</li>
    				<li>KELLY CLARKSON</li>
    				<li>NICKI MINAJ</li>
    				<li>CHRIS BROWN</li>
    			</ul>
    		</div>

    		<div class="small-4 column">
    			<img src="<?php echo get_template_directory_uri() . '/img/vegas_promo.jpg'; ?>" width="100%">
    		</div>

    		<div class="small-4 column">
    			<ul class="white-text">
    				<li>SHAGGY</li>
    				<li>ECHOSMITH</li>
    				<li>DAVID GUETTA</li>
    				<li>YOU!</li>
    			</ul>
    		</div>
    		<div class="small-12 column">
    			<h4 class="white-text">&bullet; two vip trips available &bullet;</h4>
    		</div>
    		<div class="small-6 column">
    			<div class="small-10">
    				<p>Roundtrip airfare to Las Vegas for 2</br>Transportation to &amp; from the airport in Las Vegas</br>Hotel stay on the strip</p>
    			</div>
    		</div>
    		<div class="small-6 column">
    			<div class="small-10">
    				<p>Welcome party hosted by iHeart Radio</br>2 tickets to the iHeart Radio Summer Pool Party</br>Smashburgers for a year!</p>
    			</div>
    		</div>
    		<div class="small-12 column white-text">
    			<h5 class="white-text">Get automatically entered when you</h5>
    			<a class="secondary-btn red-primary" href="/club-cards/smashclub/">Join the Smashclub</a>
    			<h6 class="white-text">Already a member? Look for an email from Smashburger with special instructions on how to enter SENT ON MAY 4TH.</h6>
    			<p class="small-print">*NO PURCHASE NECESSARY. VOID WHERE PROHIBITED BY LAW. For Official Rules see smashburger.com. Sweepstakes Period: 5/4/15 to 5/21/15. Sweepstakes Sponsor: Smashburger Marketing Fund Trust. Legal residents of the 50 states or Washington, D.C., at least 21 years of age are eligible. 2 Prize(s): iHeartRadio Summer Pool Party prize packages (ARV: $3,286 per prize package). Odds of winning depends on number of entries. Enter on-line, in-store or by mail. Please visit smashburger.com for Smashclub™ terms and conditions.</p>
    	    </div>
    	</div>
        <div class="mobile-modal show-for-small-only hide">
            <span class="x-out">x</span>
            <img src="<?php echo get_template_directory_uri() . '/img/mobile_iheart.jpg'; ?>" width="100%">
            <div class="iheart-btn">
                <a class="secondary-btn red-primary" href="/club-cards/smashclub/">Join the Smashclub</a>
            </div>
        </div>
        <div class="widget show-for-medium-up hide">
            <img src="<?php echo get_template_directory_uri() . '/img/iheart_widget.jpg'; ?>" width="100%">
        </div>
    </article>
   
		<div id="content" class="site-content">
