<?php
/**
 * The template for displaying all single posts.
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1 class="redtext-primary">The SmashBlog</h1>
	</div>
	<?php get_sidebar(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php smashburger_post_nav('Previous', 'Next'); ?>
			
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						echo '<aside id="comments"><h4 class="red-primary">Comments</h4>';
						comments_template();
						echo '</aside>';
					endif;
				?>
		
		<?php endwhile; // end of the loop. ?>

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
