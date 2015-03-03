<?php
/**
 * Template Name: In-person Thank You
 *
 * @package smashburger
 */

get_header(); ?>
<?php
	$image1 = get_field('footer_image');
	$image2 = get_field('header_image');
 ?>
	<div class="header">
		<h1>Interested in a Franchise? Good Choice</h1>
	</div>
	<div id="primary" class="content-area">
		<main>
			<div class="small-12 medium-12">
			  <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
			</div>
			<div class="small-12 medium-6 row">			
				<h2 class="brown-text">Thank You For Your Interest in <span class='redtext-secondary'>smash</span>Burger</h2>
				<p>Someone will be in contact with you shortly.</p>
			</div>
			<div class="hide-for-small-only">
				<div class="medium-12">
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>