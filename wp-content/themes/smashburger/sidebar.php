<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package smashburger
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area clear hide-for-small-only" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<p>Life, love &amp; the pursuit of Smashiness.</p>
</div><!-- #secondary -->
