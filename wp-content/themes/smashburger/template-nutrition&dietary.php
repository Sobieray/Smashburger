<?php
/**
 * Template Name: Nutrition & Dietary
 *
 * @package smashburger
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
			<section class="blue-bg clear">
				<div class="small-5 column calculator blue-bg blue-overlay">
					<h2 class="white-text">Nutrition Info</h2>
					<a href="" class="red-primary secondary-btn">Check it out</a>
				</div>
				<div class="small-7 column blue-bg pdf">
					<div class="small-6">
						<h2 class="white-text">Dietary info</h2>
						<a href="" class="red-primary secondary-btn">Download Pdf</a>
					</div>
				</div>
			</section>
			<section class="white-bg clear relative" role="main">
				<img class="small-7" src="<?php echo get_template_directory_uri() . '/img/spicybaja_burger.png' ?>" alt="baja burger">
				<div class="small-12 medium-7 center">
					<h3 class="brown-text">delicious is only the beginning</h3>
					<p class="brown-text">At Smashburger, we believe in ingredient excellence. From our smashed-to-order burgers, to our tender chicken sandwiches, signature sides and handspun shakes, you can count on fresh and high-quality food. Please take the time to view our Nutrition and Special Dietary Information. If you have any questions regarding a food allergy, or really anything, all you have to do is ask.</p>
					<img src="<?php echo get_template_directory_uri() . '/img/lettuce_top.png' ?>" alt="lettuce">
					<img src="<?php echo get_template_directory_uri() . '/img/tomato_top.png' ?>" alt="tomato">
				</div>
			</section>
			
		</main><!-- #main -->
		<section id="secondary" class="">
			<h4 class="center brown-text">Common Questions</h4>
			<div class="question slider small-12 medium-8 center">
				<div class="slide">
					<h5 class="redtext-primary">do you use organic/all-natural ingredients?</h5>
					<p>At Smashburger, we are focused on using the best-tasting and freshest ingredients. We are always looking for premium products to include on our menu. We offer all-natural Certified Angus Beef&reg; and a variety of organic toppings and beverages, and are looking into expanding those offerings on our menu throughout the year.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">2 do you use organic/all-natural ingredients?</h5>
					<p>At Smashburger, we are focused on using the best-tasting and freshest ingredients. We are always looking for premium products to include on our menu. We offer all-natural Certified Angus Beef&reg; and a variety of organic toppings and beverages, and are looking into expanding those offerings on our menu throughout the year.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">3 do you use organic/all-natural ingredients?</h5>
					<p>At Smashburger, we are focused on using the best-tasting and freshest ingredients. We are always looking for premium products to include on our menu. We offer all-natural Certified Angus Beef&reg; and a variety of organic toppings and beverages, and are looking into expanding those offerings on our menu throughout the year.</p>
				</div>
			</div>
			<a href="" class="red-primary secondary-btn">I still have questions</a>
		</section><!-- #secondary -->
	</div><!-- #primary -->

<?php get_footer(); ?>