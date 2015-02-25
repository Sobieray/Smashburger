<?php
/**
 * Template Name: Thank You
 *
 * @package smashburger
 */

get_header(); ?>
<?php
	$image1 = get_field('footer_image');
	$image2 = get_field('header_image');
 ?>
	<div class="header">
		<h1>Join The Smashclub. Eat the Benefits.</h1>
	</div>
	<div id="primary" class="content-area">
		<main>
			<div class="small-12 medium-12">
			  <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
			</div>
			<div class="small-12 medium-6 row">			
				<h2 class="brown-text">Thank You For Joining the <span class='redtext-secondary'>smash</span>club!</h2>
				<p>Within the next 24 hours you should receive a welcome email with your <span class='redtext-secondary'>delicious reward</span>. Please take some time to update your profile by clicking on the link below so you can receive a <span class='redtext-secondary'>free</span> shake on your birthday and promotions for your local Smashburger.</p>
				<a href="" class="red-primary secondary-btn">Update Your Profile</a>
			</div>
			<div class="hide-for-small-only">
				<div class="medium-12">
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>