<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package smashburger
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'smashburger' ); ?></h1>
				</header><!-- .page-header -->
				<div class="header"><h1>Uh-Oh! We Can&rsquo;t Find This Page</h1></div>
				<div class="page-content" style="background-color: #343334; margin-top: 0;">
					<div class ="row">
						<p style="margin-top: 2em;" class="center white-text"><?php _e( 'It looks like nothing was found at this location' ); ?></p>
						<iframe style="display:block;" class="center" src="//giphy.com/embed/WBTUlyKBVlTTa?html5=true" width="480" height="480" frameBorder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>

					<!-- <?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( smashburger_categorized_blog() ) : // Only show the widget if site has multiple categories. ?> 
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'smashburger' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget 
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'smashburger' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
