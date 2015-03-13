<?php
/**
 * Template Name: Smashclub
 *
 * @package smashburger
 */

get_header(); ?>
<?php
	$image1 = get_field('footer_image');
	$image2 = get_field('header_image');
 ?>
	<div class="header">
		<h1><?php echo get_field('page_title'); ?></h1>
	</div>
	<div id="primary" class="content-area">
		<main>
			<div class="small-12 medium-12">
			  <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
			</div>
			<p class="brown-text small-12 row"><?php echo get_field('page_info'); ?></p>
			<iframe src="<?php echo get_field('iframe_url'); ?>" width="60%" height="700"></iframe>
			<div class="hide-for-small-only">
				<div class="medium-12">
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
				</div>
			</div>
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