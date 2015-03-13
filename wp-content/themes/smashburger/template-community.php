<?php
/**
 * Template Name: Community & Partnerships
 *
 * @package smashburger
 */
get_header(); ?>
<?php 
	$hero_image = get_field('hero_image');
	$icon_image = get_field('icon_image');
	
?>
	<div class="header">
		<h1><?php echo get_field('page_title'); ?></h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear light-tan-bg" role="main" data-equalizer>
			<div class="small-12 medium-6 column no-padding" data-equalizer-watch>
				<img src="<?php echo $hero_image['url'] ?>" alt="<?php $hero_image['alt'] ?>">
			</div>
			<div class="small-12 medium-6 column tan-bg small-padding" data-equalizer-watch>
				<?php echo get_field('main_content'); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<section id="secondary">
		<div class="small-12">
			<img src="<?php echo $icon_image['url'] ?>" alt="<?php echo $icon_image['alt'] ?>">
		</div>
		<div class="small-12">
			<?php echo get_field('secondary_content'); ?>
		</div>
	</section>

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