<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package smashburger
 */
?>

		</div><!-- #content -->

		<footer id="colophon" class="hide-for-small-only site-footer brown tan-text" role="contentinfo">
			<div class="site-info">
				<nav id="site-navigation" class="top-bar tab-bar hide-for-medium-down" data-topbar role="navigation">	
					<section class="top-bar-section clear">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'clear', 'menu_class' => 'show-for-medium-up clear' , 'walker' => new top_bar_walker()) ); ?>
					</section>
				</nav><!-- #site-navigation -->
				<div id="social-media">
				  <ul>
				    <li><a href="https://www.facebook.com/smashburger" class="fb-icon"></a></li>
				    <li><a href="https://twitter.com/smashburger" class="twitter-icon" ></a></li>
				    <li><a href="https://www.youtube.com/user/smashburgertv" class="youtube-icon" ></a></li>
				    <li><a href="http://instagram.com/smashburger" class="instagram-icon" ></a></li>
				    <li><a href="https://www.linkedin.com/company/smashburger" class="linkedin-icon"></a></li>
				  </ul>
				</div><!-- #social-media -->
				<div id="privacy">
					<ul>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">T&amp;C&lsquo;s</a></li>
					</ul>
				</div><!-- #privacy -->
				<div id="small-print">
					<p>&copy; <?php echo date('Y'); ?> Smashburger IP Holder LLC. All rights reserved.</p>
					<p>Smashburger&reg;, Smash. Sizzle. Savor.&reg; the concentric oval design, and related trademarks are the property of Smashburger IP Holder LLC.</p>
				</div><!-- #small-print -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		<a class="exit-off-canvas"></a>
	</div><!-- #page -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
