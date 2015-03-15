<?php
/**
 * Template Name: Why Us
 *
 * @package smashburger
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div class="small-10 medium-4 brown why-us-chevron">
			<h2>why smashburger</h2>
			<p class="tan-text">If it isn't enough to be part of a fast growing franchise family that's built on quality and steeped in experience, let us tell you a little more to help make your decision even easier.</p>
		</div>
		
	</div><!-- #primary -->
	<?php get_template_part('franchise-navigation'); ?>
	<main id="why-us" class="clear" data-equalizer>
		<aside>
			<div class="dark-blue-bg small-6 medium-3 column hide-for-small">
				<h4 class="white-text">7</h4>
				<h4 class="white-text">Years in business</h4>
			</div>
			<div class="blue-bg small-6 medium-3 column hide-for-small-only">
				<h4 class="white-text">310</h4>
				<h4 class="white-text">Restaurants</h4>
			</div>
			<div class="dark-blue-bg small-12 medium-3 column">
				<h4 class="white-text">7</h4>
				<h4 class="white-text">Countries</h4>
			</div>
			<div class="blue-bg small-12 medium-3 column">
				<h4 class="white-text">33</h4>
				<h4 class="white-text">States</h4>
			</div>
		</aside>
		<div class="brown small-12 medium-6 column small-padding" data-equalizer-watch>
			<h2 class="white-text">Trailblazing</h2>
			<p class="white-text">Smashburger is setting the standard among fast casual restaurants. Maybe we&rsquo;ve let all that smashing go to our heads, but we like to stay on top of the trends by offering an extensive menu with a local edge that includes regionalized burgers, sides and shakes, alongside hometown craft beer options.</p>
		</div>
		<div class="red-primary small-12 medium-6 column small-padding" data-equalizer-watch>
			<h2 class="white-text">Prime Territories</h2>
			<p class="white-text">Even with hundreds of stores, we still have exceptional territory available in over 60% of the top markets. Room to grow and the drive to support franchisee adds up to an incredible business opportunity in amazing locations across the U.S. and abroad.</p>
		</div>
	</main><!-- main -->
	<section id="franchise-support" class="tan-bg">
		<h2 class="brown-text">Franchise Support</h2>
		<!-- <p class="brown-text row small-12 medium-8">The Smashburger corporate team is dedicated to ensuring the success of the Smashburger franchisees as they become every city&rsquo;s favorite burger place.</p>
		<p class="brown-text row small-12 medium-8">Our unique “One Smashburger” approach to operations will give you the support you need, beginning the day you make the decision to join our team. We are committed to your success and will provide you with the support you need to operate your business successfully.</p> -->
	</section>
	<section id="assist" class="brown clear">
		<div class="small-12 medium-4 column">
			<ul>
				<li>real estate</li>
				<li>site strategy</li>
				<li>lease Approval</li>
				<li>pre-opening Managment</li>
				<li>training</li>
			</ul>
		</div>
		<div class="small-2 medium-4 column">
			<h3 class="brown-text blue-bg">We will assist you with</h3>
		</div>
		<div class="small-12 medium-4 column">
			<ul>
				<li>vendors and equipment</li>
				<li>grand openings</li>
				<li>information technology</li>
				<li>marketing &amp; public relations</li>
				<li>operations</li>
			</ul>
		</div>
	</section>
	<section id="franchise-video" class="tan-bg hide-for-small-only">
		<h4 class="brown-text">Don&rsquo;t take our word for it</h4>
		<p class="brown-text">Hear from one of our Franchisees</p>
		<div class="small-12 medium-8 row">
			<iframe src="https://player.vimeo.com/video/119094446" width="100%" height="440" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<h6 class="brown-text">Irwin Kruger</h6>
			<p class="brown-text">ISK Enterprises, Long Island, NY</p>
		</div>
	</section>
	<section id="inquiry-submit" class="red-secondary">
		<a href="<?php echo site_url();?>/franchising/inquire-within/" class="secondary-btn tan-bg redtext-secondary">submit an inquiry</a>
	</section>
	
<?php get_footer('fran'); ?>
<script>
	$('#menu-item-23').addClass('active');
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