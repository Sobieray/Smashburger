<?php
/**
 * Template Name: We're Growing
 *
 * @package smashburger
 */

get_header(); ?>

	<div class="header">
		<h1>We&rsquo;re Growing</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="map-container" class="site-main" role="main" >
			<div id="map">
				<div class="howto">
					<i>Hover over an area and scroll to zoom in/out</i>
				</div>
				
				<div class="zoom-slider">
					<div class="cover"></div>
				</div>
				<div id="filters">
					<a class="recent-openings" href="javascript:void(0);">Just Opened</a>
					<a class="future-openings" href="javascript:void(0);">Coming Soon</a>
					<a class="red-secondary secondary-btn" href="mailto:requestalocation@smashburger.com?&subject=I%20want%20a%20Smashburger%20near%20me&body=I'm%20craving%20the%20smash,%20but%20there%20isn't%20one%20in%20my%20neck%20of%20the%20woods.%0APLEASE%20Smashburger,%20open%20a%20restaurant%20right%20here:%0A(Neighborhood,City,State,Zip.)" target="_blank">Request A location</a>
				</div>
			</div>
		<!-- 	<div class="range-slider round" data-slider data-options="start: 2007; end: 2015; step:1;">
			  <span class="range-slider-handle" role="slider" tabindex="0"></span>
			  <span class="range-slider-active-segment"></span>
			  <input type="hidden">
			</div> -->

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>
<script>
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