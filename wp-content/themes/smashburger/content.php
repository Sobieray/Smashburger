<?php
/**
 * @package smashburger
 */
?>

<article class="item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		$defualtImage = get_template_directory_uri() . '/img/logo.svg';
		if ( has_post_thumbnail() ) {
			the_post_thumbnail(full);
		} 
		else {
					echo '<img src="'.$defualtImage.'">';
		}
		?>
		<div class="entry-content">
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<?php if ( 'post' == get_post_type() ) : ?>
		
			<?php
				/* translators: %s: Name of current post */
				the_excerpt( sprintf(
					__( 'Read More %s <span class="meta-nav">&rarr;</span>', 'smashburger' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'smashburger' ),
					'after'  => '</div>',
				) );
			?>
			
			<?php endif; ?>
		</div><!-- .entry-content -->
		
	</header><!-- .entry-header -->



	<footer class="entry-footer">
		<div class="entry-meta">
				<ul>
					<li><p><?php the_time('j M Y') ?></p></li>
					<li><p><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></p></li>
					<li><p><a href="<?php echo get_permalink(); ?>">read more<span></span></a></p></li>
				</ul> <!-- <?php smashburger_posted_on(); ?> -->
			</div><!-- .entry-meta -->
		<!-- <?php smashburger_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->