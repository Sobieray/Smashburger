<?php
/**
 * Template Name: Food Story
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1>Story of our food</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear" role="main">
			<section id="first" class="clear tan-bg flex">
				<div class="medium-6 hide-for-medium-down column">
					<img src="<?php echo get_template_directory_uri() . '/img/left-burger.png' ?>" alt="smashburger cheeseburger" />
				</div>
				<div class="small-12 large-6 column">
					<p class="brown-text center-margin"><span>N</span>ot long ago, people ate lots of (ordinary) burgers. But there was something missing &mdash; something satisfying and real, something basic and good, something affordable and fresh &ndash; something with a soul. There wasn&rsquo;t a place that people who truly loved good food and good burgers could call their own and feel good about recommending to their friends and family. So we asked ourselves, shouldn&rsquo;t there be a better way?</p>
				</div>
			</section>
		</main><!-- #main -->
		<section id="secondary" class="clear flex">
			<div class="small-12 medium-6 column red-secondary">
				<p class="white-text"><span>A</span>t Smashburger, we believe... scratch that, WE KNOW that smashing is better. Our handcrafted burgers are smashed, seared and seasoned to order, using fresh, never frozen 100% Certified Angus Beef&reg;. Whether you choose our Classic Smashburger or decide to create your own, our artisan buns, fresh produce, flavorful sauces and variety of real cheeses are designed to deliver a great tasting, juicy burger you can taste in every bite.</p>
		  </div>
		  <div class="small-6 medium-3 column center-padding light-brown-bg css-triangle">
				<img src="<?php echo get_template_directory_uri() . '/img/fresh_icon2.svg' ?>" alt="smashburger double cheeseburger" />
		  </div>
		  <div class="small-6 medium-3 column no-padding">
				<img class="hide-for-small-only" src="<?php echo get_template_directory_uri() . '/img/beans&fries.png' ?>" alt="smashburger fries" />
				<img class="show-for-small-only" src="<?php echo get_template_directory_uri() . '/img/harvest_salad.svg' ?>" alt="smashburger salads" />
		  </div>
		</section><!-- #secondary -->
		<section id="third" class="clear flex">
			<div class="hide-for-small-only medium-3 column no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/grapefruit_icon.png' ?>" alt="smashburger orange vector art" />
		  </div>
		  <div class="hide-for-small-only medium-3 column no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/double-burger.jpg' ?>" alt="smashburger double cheeseburger" />
		  </div>
		  <div class="hide-for-small-only medium-3 column no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/story_lettuce.png' ?>" alt="smashburger fresh lettuce" />
		  </div>
		  <div class="hide-for-small-only medium-3 column no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/food-spread.jpg' ?>" alt="smashburger fresh ingredients" />
		  </div>
		</section><!-- #third -->
		<section id="fourth" class="clear flex">
			<div class="medium-3 column hide-for-small-only no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/food_tomato.png' ?>" />
			</div>
			<div class="small-4 medium-3 column tan-bg css-triangle right no-padding">
				<img class="small-padding" src="<?php echo get_template_directory_uri() . '/img/harvest_salad.svg' ?>" alt="smashburger salads" />
			</div>
			<div class="small-12 medium-6 column red-secondary">
				<p class="white-text"><span>E</span>very great burger needs a sidekick, and our selection of signature sides &mdash; like our Smashfries tossed with rosemary, olive oil and garlic, haystack onions and fried pickles, are the perfect complement to any meal. The same is true for our handspun Häagen&ndash;Dazs&reg; shakes, served in a frosted glass. And if you&lsquo;re in the mood for something other than a burger, our menu of grilled or crispy chicken sandwiches, fresh salads and veggie burgers is sure to satisfy. We believe that choosing Smashburger means choosing happiness. You are one bite away from believing it too.</p>
			</div>
		</section><!-- #fourth -->
		<section id="fifth" class="clear flex">
			<div class="small-12 medium-3 column tomato no-padding">
				<img src="<?php echo get_template_directory_uri() . '/img/milkshakes.jpg' ?>" alt="smashburger milkshakes" />
			</div>
			<div class="small-4 medium-3 column no-padding hide-for-small-only">
				<img src="<?php echo get_template_directory_uri() . '/img/onion-lettuce.png' ?>" alt="fresh lettuce and tomatoes" />
			</div>
			<div class="small-6 medium-3 column gray-bg ">
				<p class="redtext-primary tan-bg">smashed fresh</p>
			</div>
			<div class="small-6 medium-3 column tan-bg">
				<p class="white-text red-secondary">served delicious</p>
			</div>
		</section><!-- #fifth -->
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