<?php
/**
 * Template Name: Nutrition & Dietary
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header hide-for-960-down">
		<h1>Nutrition &amp; Dietary</h1>
	</div>
	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
			<section class="blue-bg clear">
				<div class="small-12 medium-6 large-5 column calculator blue-bg blue-overlay">
					<h2 class="white-text">Nutrition Info</h2>
					<a href="http://smashwebadmin.wpengine.com/wp-content/uploads/2015/02/Nutritional-Information-February-2015.pdf" class="red-primary secondary-btn">Check it out</a>
				</div>
				<div class="small-12 medium-6 large-7 column blue-bg pdf">
					<div class="small-12 large-6">
						<h2 class="white-text">Dietary info</h2>
						<a href="http://smashwebadmin.wpengine.com/wp-content/uploads/2015/02/Allergen-Menu-February-2015.pdf" class="red-primary secondary-btn">Download Pdf</a>
					</div>
				</div>
			</section>
			<section class="white-bg clear relative" role="main">
				<img class="small-7 hide-for-medium-down" src="<?php echo get_template_directory_uri() . '/img/spicybaja_burger.png' ?>" alt="baja burger">
				<div class="small-12 medium-7 center">
					<h3 class="brown-text">delicious is only the beginning</h3>
					<p class="brown-text">At Smashburger, we believe in ingredient excellence. From our smashed-to-order burgers, to our tender chicken sandwiches, signature sides and handspun shakes, you can count on fresh and high-quality food. Please take the time to view our Nutrition and Special Dietary Information. If you have any questions regarding a food allergy, or really anything, all you have to do is ask.</p>
					<img class="hide-for-medium-down" src="<?php echo get_template_directory_uri() . '/img/lettuce_top.png' ?>" alt="lettuce">
					<img class="hide-for-medium-down" src="<?php echo get_template_directory_uri() . '/img/tomato_top.png' ?>" alt="tomato">
				</div>
			</section>
			
		</main><!-- #main -->
		<section id="secondary" class="hide-for-small-only">
			<h4 class="center brown-text">Common Questions</h4>
			<div class="question slider small-12 medium-8 center">
				<div class="slide">
					<h5 class="redtext-primary">Do you use organic/all-natural ingredients? If not, how come?</h5>
					<p>At Smashburger, we are focused on using the best tasting and freshest ingredients. We are always looking for premium products to include on our menu. We do offer all-natural Certified Angus Beef&reg; and are looking into adding more organic menu options.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">Is your beef grass-fed and hormone free?</h5>
					<p>Our beef is pasture-fed and corn finished. It is all-natural Certified Angus Beef&reg; that comes from the mid-western states.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">Do you offer any vegetarian items at Smashburger?</h5>
					<p>Yes we do &mdash; and they are all mouthwatering! We offer a Veggie Black Bean burger, however please note that it is NOT vegan as it contains eggs. We also cook our veggie burger on the same grill as our chicken and burgers, so cross-contact may occur. We also have a number of fresh, vegetarian salad options; just order them without bacon or meat.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">Do you offer any gluten&ndash;free buns?</h5>
					<p>Yes, we offer an Udi’s Gluten-Free bun option in all Smashburger restaurants across the country. We have also reformulated our burger seasoning to be gluten-free. While we strive for a 100% gluten-free product, we cannot guarantee that as we use the same toaster for all of our buns and other toppings (such as fried pickles, haystacks, etc.) do contain gluten. Cross-contact may occur as shared equipment for menu items is used in the kitchen.</p>
				</div>
				<div class="slide">
					<h5 class="redtext-primary">Are your fries gluten&ndash;free?</h5>
					<p>Our fries are not gluten free. They are fried in a common fryer with other items that contain gluten.</p>
				</div>
			</div>
			<a href="" class="red-primary secondary-btn">I still have questions</a>
		</section><!-- #secondary -->
	</div><!-- #primary -->

<?php get_footer(); ?>