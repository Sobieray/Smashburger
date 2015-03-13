<?php
/**
 * Template Name: Franchise Inquiry 
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1 class="redtext-primary">Submit an Inquiry</h1>
	</div>
	<?php get_template_part('franchise-navigation'); ?>
	<div id="primary" class="content-area">
		<main id="inquire" class="site-main clear" role="main">
			<iframe src="https://chester2.franconnect.net/smashburger/iframeleadpage.jsp" height="960" width="960" ></iframe>
			
		</main><!-- #main -->
		
	</div><!-- #primary -->
<?php get_footer('custom'); ?>
<script>
	$('#menu-item-23').addClass('active');
		/*Drop-in Navigation Background*/
	$(window).scroll(function() {
		var windowTop = $(window).scrollTop();
		if (windowTop >= 96) {
			$('nav#site-navigation').addClass('bg');
		} else {
			$('nav#site-navigation').removeClass('bg');
		}
	});
</script>
