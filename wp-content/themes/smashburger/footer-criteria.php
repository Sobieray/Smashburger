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
						<li><a href="http://smashwebadmin.wpengine.com/wp-content/uploads/2015/03/Smashburger-Privacy-Policy-10-15-14.pdf">Privacy Policy</a></li>
						<li><a href="/terms-and-conditions/">T&amp;C&lsquo;s</a></li>
					</ul>
				</div><!-- #privacy -->
				<div id="small-print">
					<p>&copy; <?php echo date('Y'); ?> Smashburger IP Holder LLC. All rights reserved.</p>
					<p>Smashburger&reg;, Smash. Sizzle. Savor.&reg; the concentric oval design, and related trademarks are the property of Smashburger IP Holder LLC.</p>
					<p>This information is not intended as an offer to sell, or the solicitation of an offer to buy, a franchise. It is for information purposes only. Currently, the following states in the United States regulate the offer and sale of franchises: California, Hawaii, Illinois, Indiana, Maryland, Michigan, Minnesota, New York, North Dakota, Oregon, Rhode Island, South Dakota, Virginia, Washington, and Wisconsin. If you are a resident of one of these states, we will not offer you a franchise unless and until we have complied with applicable pre-sale registration and disclosure requirements in your jurisdiction.</p>
					<p>*The required criteria for franchisees is specified as a minimum of $1.5 million net worth and a minimum of $500K in liquid assets. Larger development agreements may require further credentials.</p>
				</div><!-- #small-print -->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		<a class="exit-off-canvas"></a>
	</div><!-- #page -->
</div><!-- .off-canvas-wrap -->

<?php wp_footer(); ?>

</body>
</html>
