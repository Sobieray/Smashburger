<?php
/**
 * Template Name: Contact
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1>Contacts</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear light-tan-bg contacts" role="main" data-equalizer>
			<div class="small-12 medium-6 column no-padding" data-equalizer-watch>
				<h2 class="redtext-secondary">Smashburger master LLC</h2>
				<ul class="main-contact">
					<li><address class="brown-text">3900 East Mexico Avenue, Suite 1200<br>Denver, CO 80210</address></li>
					<li><a class="brown-text" href="tel:3036331500">303-633-1500</a></li>
				</ul>
				<img src="<?php echo get_template_directory_uri() . '/img/contacts_interior.jpg' ?>" alt="smashburger fast casual store interior" />
			</div>
			<aside class="small-12 medium-6 column no-padding" data-equalizer-watch>
				<div class="real-estate red-tertiary row">
					<h4>Real Estate</h4>
					<a href="mailto:realestate@smashburger.com">realestate@smashburger.com</a>
				</div>
				<div class="franchising red-secondary row">
					<h4>Franchising</h4>
					<a href="mailto:franchisesales@smashburger.com">franchisesales@smashburger.com</a>
				</div>
				<div class="careers red-tertiary row">
					<h4>Careers</h4>
					<a href="mailto:recruitment@smashburger.com">recruitment@smashburger.com</a>
				</div>
				<div class="careers red-secondary row">
					<h4>Media</h4>
					<a href="mailto:pr@smashburger.com">pr@smashburger.com</a>
				</div>
			</aside>
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