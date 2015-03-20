<?php
/**
 * Template Name: Angus Beef
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1>Certified Angus</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="angus_hero hide-for-small-only"></div>
			<section class="flex">
				<div class="small-12 column brown-text angus">
					<h1 class="brown-text">it&rsquo;s not just any old angus beef</h1>
					<p>At Smashburger taste and quality are at the top of the list. That’s why we only use 100% Certified Angus Beef&reg; in our burgers. PERIOD. Full stop.</p>
					<p>Angus is everywhere these days and over the last couple of decades it’s even become a bit of a buzzword. Angus beef is good. It's true. But the Certified Angus Beef&reg; brand? It’s on an entirely different level. The folks at CAB have defined standards against which they measure all beef. They take no shortcuts and have a virtual obsession with flavor and juiciness.</p>
					<p>How did those standards come into being? Glad you asked. It&rsquo;s an interesting story we never get tired of telling. It&rsquo;s the tale of a group of farmers who, in the 1970s, got together and said collectively, &#8220;We can do better. We can produce beef that&rsquo;s extremely tender, juicier and always packed with flavor.&#8221;</p>
					<p>They then proceeded to set the exacting standards that have become the true mark of quality of an Angus brand. The Certified Angus Beef&reg; brand. From our family ranches to your family table.</p>
					<h2 class="brown-text">pride. it has everything to do with taste.</h2>
				</div>
			</section>
		</main><!-- #main -->
		<section id="secondary" class="flex">
			<div class="small-12 medium-6 column tan-bg tom-ryan small-padding">
				<div class="">
					<h4>Magic. It&rsquo;s what happens when meat and heat collide. When you add the flavor profile of 100% Certified Angus Beef&reg; raised by family farmers and ranchers to that equation, it&rsquo;s truly out of this world...&#8221;</h4>
					<blockquote><h6 class="redtext-primary">tom ryan</h6><p>Smashburger Founder</p><p>Chief Concept Officer</p></blockquote>
				</div>
			</div>
			<div class="small-12 medium-6 column pyramid red-primary center-padding">
				<div class="">
					<img src="<?php echo get_template_directory_uri() . '/img/beef_pyramid.png' ?>" alt="Angus Beed USDA Select">
					<h4 class="white-text">A cut above the usda prime, choice &amp; select</h4>
				</div>
		</section><!-- #secondary -->
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