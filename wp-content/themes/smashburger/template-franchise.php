<?php
/**
 * Template Name: Franchise
 *
 * @package smashburger
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="franchising">
			<h2 class="white-text">Life is better here</h2>
			<?php wp_nav_menu( array( 'menu' => 'franchise', 'container_class' => 'franchise-menu clear') ); ?>
		</main><!-- #main -->
		<article>
			<header>
			  <h3>this just in</h3>
			</header>
			<main>
				<?php echo get_field('news'); ?> <!-- News Ticker -->
			</main>
		</article>
	</div><!-- #primary -->
<?php get_footer('fran'); ?>
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