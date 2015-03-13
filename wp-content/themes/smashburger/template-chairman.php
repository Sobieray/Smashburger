<?php
/**
 * Template Name: Chairman 
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1 class="redtext-primary">Our Chairman</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear" role="main">
			<!-- <div class="medium-6 large-4 column no-padding hide-for-small-only">
				<img src="<?php echo get_template_directory_uri() . '/img/rick_schaden.png' ?>" alt="Smashburger Chairmain Rick Schaden">
			</div> -->
			<div class="small-12 column">
				<img src="<?php echo get_template_directory_uri() . '/img/rick_schaden.png' ?>" alt="Smashburger Chairmain Rick Schaden">
				<p><span>Rick Schaden,</span> who established Consumer Capital Partners in 2006 with his father, currently serves the Denver-headquartered investment, advisory, and marketing company as CEO. The firm has drawn on his extensive entrepreneurial experience to fund and operate a variety of start-up businesses in the restaurant, consumer, and sports sectors. Among the emergent Denver-based businesses that he has fast-tracked in recent years are the Smashburger chain, modern &amp; casual dining Tom&lsquo;s Urban, and Live Basil Pizza.</p>
				<p>Through Consumer Capital Partners, Rick also has investments in banking and financial services, and both commercial and residential rental real estate. Rick is also a dedicated supporter of a range of charitable causes that focus on expanding educational opportunities for young people, assisting homeless families in finding both housing and other services needed to transition into more stable lifestyle and alleviating extreme poverty around the world.</p>
			</div>
		</main><!-- #main -->
		<section id="secondary" class="clear flex">
			<div class="small-12 large-6 column red-primary">
				<p class="white-text small-padding">Additionally in 2011, Rick launched the USA Pro Challenge, a professional cycling event that has engaged more than a million in-person spectators and numerous additional fans. The event which returns in August 2013, features an intense course at an altitude greater than 12,000 feet through the challenges of Colorado’s Rocky Mountain terrain. In 2013, the multiple-day race travelled through Aspen, Breckenridge, Steamboat Springs, and other locations known for their dramatic beauty. Widely known as “America’s Race,” the USA Pro Challenge partners with corporations and brands such as The Coca-Cola Company, UnitedHealthcare, Nissan, and The Denver Post.  He developed the event in part as a means of showcasing Colorado as the heart of professional bicycle racing in the United States.</p>
				<a href="http://rickschaden.com/" class="darkred-btn">Visit Rick&lsquo;s blog<span></span></a>
			</div>
			<div class="small-12 large-6 column small-padding rick-shaden">
					<h4>rick schaden us pro challenge</h4>
			</div>
		</section>
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
