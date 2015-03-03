<?php
/**
 * @package smashburger
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>
	<header class="entry-header">
		<div class="small-12 medium-6 column no-padding main-image">
			<?php 
				$defualtImage = get_template_directory_uri() . '/img/logo.svg';
				if ( has_post_thumbnail() ) {
					the_post_thumbnail(full);
				} 
				else {
							echo '<img src="'.$defualtImage.'">';
				}
			?>
		</div>
		<div class="small-12 medium-6 column title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'smashburger' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer small-12 column">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
