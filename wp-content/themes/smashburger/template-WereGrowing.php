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
				<div class="zoom-slider">
				</div>
			</div>
			<div class="range-slider round" data-slider data-options="start: 2007; end: 2015; step:1;">
			  <span class="range-slider-handle" role="slider" tabindex="0"></span>
			  <span class="range-slider-active-segment"></span>
			  <input type="hidden">
			</div>

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>