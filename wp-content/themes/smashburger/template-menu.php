<?php
/**
 * Template Name: Menu
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1>Our Menu</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear" role="main">
			<div class="menu-links hide-for-medium-down">
				<ul class="tabs" data-tab>
				  <li class="tab-title active"><a class="brown-text" href="#panel1">burgers</a></li>
				  <li class="tab-title"><a href="#panel2">chicken</a></li>
				  <li class="tab-title"><a href="#panel3">create</br>your own</a></li>
				  <li class="tab-title"><a href="#panel4">fresh</br>salads</a></li>
				  <li class="tab-title"><a href="#panel5">fries</br>&amp; sides</a></li>
				  <li class="tab-title"><a href="#panel6">hand&ndash;spun</br>shakes</a></li>
				  <li class="tab-title"><a href="#panel7">kids</a></li>
				</ul>
				<div class="menu-files">
					<a href="http://smashwebadmin.wpengine.com/wp-content/uploads/2015/02/smashburger_menu.pdf" download>Download</a>
					<a href="http://smashwebadmin.wpengine.com/wp-content/uploads/2015/02/smashburger_menu.pdf" print>Print</a>
				</div>
			</div>
			<!-- Mobile Menu -->
			<dl id="menuDropdown" class="accordion show-for-medium-down" data-accordion>
			  <dd class="accordion-navigation clear">
			    <a class="clear" href="#menuPanel"><h5>categories</h5></a>
				  <div id="menuPanel" class="menu-links content">
						<ul class="tabs" data-tab>
						  <li class="tab-title active"><a class="brown-text" href="#panel1">burgers</a></li>
						  <li class="tab-title"><a href="#panel2">chicken</a></li>
						  <li class="tab-title"><a href="#panel3">create your own</a></li>
						  <li class="tab-title"><a href="#panel4">fresh salads</a></li>
						  <li class="tab-title"><a href="#panel5">fries &amp; sides</a></li>
						  <li class="tab-title"><a href="#panel6">hand&ndash;spun shakes</a></li>
						  <li class="tab-title"><a href="#panel7">kids</a></li>
						</ul>
			    </div>
			  </dd>
			</dl>
			<div class="tabs-content">
			  <div class="content active" id="panel1">
			    <section class="row1 clear flex">
				    <div class="menu slider small-12 large-6 column">
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/slide_classic_burger.jpg' ?>" alt="classic smashburger">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/slide_baja_burger.jpg' ?>" alt="classic smashburger">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/slide_bbq_burger.jpg' ?>" alt="classic smashburger">
		   				</div>
		   			</div>
				   	<div class="medium-6 large-3 column red-primary menu-locate burgers">
				   		<img src="<?php echo get_template_directory_uri() . '/img/menu_burger_pin.png' ?>" alt="">
				   		<p>Finding Your Local</p>
				   		<h6>Burger</h6>
				   		<select>
				   			<option selected>Explore Local Recipes</option>
				   			<option data-zip="35758">Alabama</option>
				   			<option data-zip="T8H 0P5">Alberta</option>
				   			<option data-zip="85712">Arizona</option>
				   			<option data-zip="T1Y 5S5">Calgary</option>
				   			<option disabled>California</option>
				   			<optgroup>
				   				<option>Orange County</option>
				   				<option data-zip="91360">Los Angeles</option>
				   				<option data-zip="95815">Northern California</option>
				   				<option data-zip="92108">San Diego</option>
				   				<option data-zip="92606">Southern California</option>
				   				<option data-zip="94103">The Bay</option>
				   			</optgroup>
				   			<option data-zip="80207">Colorado</option>
				   			<option data-zip="06385">Connecticut</option>
				   			<option disabled>Florida</option>
				   			<optgroup>
				   				<option data-zip="32828">Central Florida</option>
				   				<option data-zip="32266">Neptune Beach</option>
				   				<option data-zip="33305">Miami</option>
				   			</optgroup>
				   			<option data-zip="30324">Georgia</option>
				   			<option data-zip="83709">Idaho</option>
				   			<option data-zip="60614">Illinois</option>
				   			<option data-zip="50266">Iowa</option>
				   			<option data-zip="66502">Kansas</option>
				   			<option data-zip="40222">Kentucky</option>
				   			<option data-zip="71105">Louisiana</option>
			   				<option data-zip="70115">New Orleans</option>
			   				<option data-zip="21231">Maryland</option>
			   				<option data-zip="02090">Massachusetts</option>
			   				<option disabled>Michigan</option>
			   				<optgroup>
			   					<option data-zip="49503">Eastern Michigan</option>
			   					<option data-zip="48322">Western Michigan</option>
			   				</optgroup>
			   				<option data-zip="55116">Minnesota</option>
			   				<option data-zip="63303">Missouri</option>
			   				<option data-zip="68137">Nebraska</option>
			   				<option data-zip="89119">Nevada</option>
			   				<option data-zip="07974">New Jersey</option>
			   				<option data-zip="10001">New York</option>
			   				<option data-zip="27615">North Carolina</option>
			   				<option data-zip="58103">North Dakota</option>
			   				<option data-zip="45255">Ohio</option>
			   				<option data-zip="73118">Oklahoma</option>
			   				<option disabled>Pennsylvania</option>
			   				<optgroup>
				   				<option data-zip="15146">Moneroeville</option>
				   				<option data-zip="19087">Radnor</option>
				   			</optgroup>
			   				<option data-zip="29483">South Carolina</option>
			   				<option data-zip="37129">Tennessee</option>
			   				<option disabled>Texas</option>
			   				<optgroup>
			   					<option data-zip="76116">Dallas/Fort Worth</option>
			   					<option data-zip="79906">Fort Bliss</option>
			   					<option data-zip="78723">Southern Texas</option>			   	
			   				</optgroup>	
			   				<option data-zip="84119">Utah</option>
			   				<option data-zip="22030">Virgina</option>
			   				<option data-zip="54016">Wisconsin</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-12 medium-6 large-3 column no-padding local-burger burgers">
				   		<div class="flip">
					   		<div class="vertical-align front locating">
					   			<h4 class="white-text">your local burger</h4>
					   			<img class="question" src="<?php echo get_template_directory_uri() . '/img/question_mark.svg' ?>" alt="finding your local smashburger">
					   		</div>
					   		<div class="back">
					   			<a class="red-btn" href="">Hungry?<span></span></a>
					   		</div>
					   	</div>
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="flip-container small-12 medium-6 large-3 column dark-blue-bg no-padding">
							<div class="flip">
								<div class="front">
									<h4>Classic Smash</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/classic_smash.svg' ?>" alt="the classic smashburger">
								</div>
								<div class="back">
									<h4>Classic Smash</h4>
									<p>American cheese, Smash Sauce, ketchup, lettuce, tomato, pickles &amp; onion on an egg bun.</p>
									<a href="" class="blue-btn">Hungry?<span></span></a>
								</div>
					  	</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Avocado Club</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/avocado_club.svg' ?>" alt="the smashburger avocado club burger">
								</div>
								<div class="back">
									<h4>Avocado Club</h4>
									<p>Fresh avocado, applewood smoked bacon, lettuce, tomato, ranch dressing &amp; mayo on a multi-grain bun.</p>
									<a href="" class="red-btn">Hungry?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
				  		<div class="flip">
					  		<div class="front">
									<h4>BBQ, Bacon &amp; Cheddar</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/bbq_burger.svg' ?>" alt="">
								</div>
								<div class="back">
									<h4>BBQ, Bacon &amp; Cheddar</h4>
									<p>BBQ sauce, applewood smoked bacon, cheddar &amp; haystack onions on an egg bun.</p>
									<a class="brown-btn">Hungry ?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Bacon Cheeseburger</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/bacon_cheesburger.svg' ?>" alt="">
								</div>
								<div class="back">
									<h4>Bacon Cheeseburger</h4>
									<p>Applewood smoked bacon, American cheese, mustard, ketchup, pickles &amp; onion on an egg bun.</p>
									<a href="" class="darkred-btn">Hungry?<span></span></a>
								</div>
							</div>
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
			  			<div class="flip">
			  				<div class="front">
					  			<h4>Buffalo &amp; Blue Cheese</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/buffalo_burger.svg' ?>" alt="smashburger buffalo blue cheese burger">
					  		</div>
					  		<div class="back">
					  			<h4>Buffalo &amp; Blue Cheese</h4>
					  			<p>Frank’s&reg; RedHot&reg; Buffalo Sauce, blue cheese crumbles, lettuce, tomato &amp; mayo on an egg bun.</p>
					  			<a href="" class="brown-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Spicy Jalape&Ntilde;o Baja</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/baja_burger.svg' ?>" alt="smashburger spicy baja burger">
					  		</div>
					  		<div class="back">
					  			<h4>Spicy Jalape&Ntilde;o Baja</h4>
					  			<p>Fresh jalape&ntilde;os, guacamole, pepper jack, lettuce, tomato, onion &amp; chipotle mayo on a spicy chipotle bun.</p>
					  			<a class="darkred-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Spinach &amp; Goat Cheese</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/spinach_burger.svg' ?>" alt="smashburger spinach cucmber and goat cheese burger">
					  		</div>
					  		<div class="back">
					  			<h4>Spinach &amp; Goat Cheese</h4>
					  			<p>Cucumbers, spinach, goat cheese, tomato, onion &amp; balsamic vinaigrette on a multi-grain bun.</p>
					  			<a href="" class="blue-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Truffle Mushroom Swiss</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/truffle_burger.svg' ?>" alt="smashburger truffle mushroom and swiss burger">
					  		</div>
					  		<div class="back">
					  			<h4>Truffle Mushroom Swiss</h4>
					  			<p>Truffle mayo, sautéed crimini mushrooms &amp; aged Swiss on an egg bun.</p>
					  			<a href="" class="red-btn">Hungry?<span></span></a>
					  		</div>
			    	</div>
			    </section>
				</div><!-- #panel1  --><!-- Burgers -->
			  <div class="content" id="panel2">
			    <section class="row1 clear flex">
				    <div class="menu slider small-12 large-6 column">
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/slide_chicken_classic.jpg' ?>" alt="smashburger classic chicken sandwich">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/slide_chicken_avocado.jpg' ?>" alt="smashburger chicken avocado sandwich">
		   				</div>
		   			</div>
				   	<div class="medium-6 large-3 column red-primary menu-locate chicken">
				   		<img src="<?php echo get_template_directory_uri() . '/img/menu_burger_pin.png' ?>" alt="">
				   		<p>Finding Your Local</p>
				   		<h6>SmashChicken</h6>
				   		<select>
				   			<option selected>Explore Local Recipes</option>
				   			<option data-zip="35758">Alabama</option>
				   			<option data-zip="T8H 0P5">Alberta</option>
				   			<option data-zip="85712">Arizona</option>
				   			<option data-zip="T1Y 5S5">Calgary</option>
				   			<option disabled>California</option>
				   			<optgroup>
				   				<option>Orange County</option>
				   				<option data-zip="91360">Los Angeles</option>
				   				<option data-zip="95815">Northern California</option>
				   				<option data-zip="92108">San Diego</option>
				   				<option data-zip="92606">Southern California</option>
				   				<option data-zip="94103">The Bay</option>
				   			</optgroup>
				   			<option data-zip="80207">Colorado</option>
				   			<option data-zip="06385">Connecticut</option>
				   			<option disabled>Florida</option>
				   			<optgroup>
				   				<option data-zip="32828">Central Florida</option>
				   				<option data-zip="32266">Neptune Beach</option>
				   				<option data-zip="33305">Miami</option>
				   			</optgroup>
				   			<option data-zip="30324">Georgia</option>
				   			<option data-zip="83709">Idaho</option>
				   			<option data-zip="60614">Illinois</option>
				   			<option data-zip="50266">Iowa</option>
				   			<option data-zip="66502">Kansas</option>
				   			<option data-zip="40222">Kentucky</option>
				   			<option data-zip="71105">Louisiana</option>
			   				<option data-zip="70115">New Orleans</option>
			   				<option data-zip="21231">Maryland</option>
			   				<option data-zip="02090">Massachusetts</option>
			   				<option disabled>Michigan</option>
			   				<optgroup>
			   					<option data-zip="49503">Eastern Michigan</option>
			   					<option data-zip="48322">Western Michigan</option>
			   				</optgroup>
			   				<option data-zip="55116">Minnesota</option>
			   				<option data-zip="63303">Missouri</option>
			   				<option data-zip="68137">Nebraska</option>
			   				<option data-zip="89119">Nevada</option>
			   				<option data-zip="07974">New Jersey</option>
			   				<option data-zip="10001">New York</option>
			   				<option data-zip="27615">North Carolina</option>
			   				<option data-zip="58103">North Dakota</option>
			   				<option data-zip="45255">Ohio</option>
			   				<option data-zip="73118">Oklahoma</option>
			   				<option disabled>Pennsylvania</option>
			   				<optgroup>
				   				<option data-zip="15146">Moneroeville</option>
				   				<option data-zip="19087">Radnor</option>
				   			</optgroup>
			   				<option data-zip="29483">South Carolina</option>
			   				<option data-zip="37129">Tennessee</option>
			   				<option disabled>Texas</option>
			   				<optgroup>
			   					<option data-zip="76116">Dallas/Fort Worth</option>
			   					<option data-zip="79906">Fort Bliss</option>
			   					<option data-zip="78723">Southern Texas</option>			   	
			   				</optgroup>	
			   				<option data-zip="84119">Utah</option>
			   				<option data-zip="22030">Virgina</option>
			   				<option data-zip="54016">Wisconsin</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-12 medium-6 large-3 column no-padding local-burger chicken">
				   		<div class="flip">
					   		<div class="vertical-align front locating">
					   			<h4 class="white-text">your local smashchicken</h4>
					   			<img class="question" src="<?php echo get_template_directory_uri() . '/img/question_mark.svg' ?>" alt="finding your local smashburger">
					   		</div>
					   		<div class="back">
					   			<a class="red-btn" href="">Hungry?<span></span></a>
					   		</div>
					   	</div>
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="flip-container small-12 medium-6 large-3 column dark-blue-bg no-padding">
							<div class="flip">
								<div class="front">
									<h4>Classic Chicken</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/classic_chicken_sandwich.svg' ?>" alt="the classic chicken sandwich">
								</div>
								<div class="back">
									<h4>Classic Chicken</h4>
									<p>Lettuce, tomato, pickles, red onion &amp; mayo on a multi-grain bun. Choice of tender marinated grilled or crispy chicken.</p>
									<a href="" class="blue-btn">Hungry?<span></span></a>
								</div>
					  	</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Avocado Club</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/club_chicken_sandwich.svg' ?>" alt="the smashburger avocado club burger">
								</div>
								<div class="back">
									<h4>Avocado Club</h4>
									<p>Fresh avocado, applewood smoked bacon, lettuce, tomato, ranch dressing &amp; mayo on a multi-grain bun. Choice of tender marinated grilled or crispy chicken.</p>
									<a href="" class="darkred-btn">Hungry?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
				  		<div class="flip">
					  		<div class="front">
									<h4>BBQ, Bacon &amp; Cheddar</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/bbq_chicken_sandwich.svg' ?>" alt="">
								</div>
								<div class="back">
									<h4>BBQ, Bacon &amp; Cheddar</h4>
									<p>BBQ sauce, applewood smoked bacon, cheddar &amp; haystack onions on an egg bun. Choice of tender marinated grilled or crispy chicken.</p>
									<a class="brown-btn">Hungry ?<span></span></a>
								</div>
							</div>
				  	</div>
	  	  		<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
	  	  			<div class="flip">
	  	  				<div class="front">
	  			  			<h4>Buffalo &amp; Blue Cheese</h4>
	  			  			<img src="<?php echo get_template_directory_uri() . '/img/buffalo_chicken_sandwich.svg' ?>" alt="smashburger buffalo blue cheese burger">
	  			  		</div>
	  			  		<div class="back">
	  			  			<h4>Buffalo &amp; Blue Cheese</h4>
	  			  			<p>Frank&rsquo;s&reg; RedHot&reg; Buffalo Sauce, blue cheese crumbles, lettuce, tomato &amp; mayo on an egg bun. Choice of tender marinated grilled or crispy chicken.</p>
	  			  			<a class="red-btn">Hungry?<span></span></a>
	  			  		</div>
	  			  	</div>
	  	    	</div>
				  </section>
			  	<section id="row3" class="clear flex" data-equalizer>	
			    	<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Spicy Jalape&Ntilde;o Baja</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/spicy_chicken_sandwich.svg' ?>" alt="smashburger spicy baja burger">
					  		</div>
					  		<div class="back">
					  			<h4>Spicy Jalape&Ntilde;o Baja</h4>
					  			<p>Fresh jalape&ntilde;os, guacamole, pepper jack, lettuce, tomato, onion &amp; chipotle mayo on a spicy chipotle bun.  Choice of tender marinated grilled or crispy chicken.</p>
					  			<a href="" class="brown-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Spinach &amp; Goat Cheese</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/spinach_chicken_sandwich.svg' ?>" alt="smashburger spinach cucmber and goat cheese burger">
					  		</div>
					  		<div class="back">
					  			<h4>Spinach &amp; Goat Cheese</h4>
					  			<p>Cucumbers, spinach, goat cheese, tomato, onion &amp; balsamic vinaigrette on a multi-grain bun. Choice of tender marinated grilled or crispy chicken.</p>
					  			<a href="" class="red-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding" data-equalizer-watch>
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Truffle Mushroom Swiss</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/truffle_chicken_sandwich.svg' ?>" alt="smashburger truffle mushroom and swiss burger">
					  		</div>
					  		<div class="back">
					  			<h4>Truffle Mushroom Swiss</h4>
					  			<p>Truffle mayo, sautéed crimini mushrooms &amp; aged Swiss on an egg bun. Choice of tender marinated grilled or crispy chicken.</p>
					  			<a href="" class="blue-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="hide-for-small-only small-12 medium-6 large-3 column red-tertiary back-to-burgers" data-equalizer-watch>
			    		<h6>Mix it Up</h6>
			    		<p>Have any of our chicken recipes with a burger</p>
			    		<a href="" class="red-secondary secondary-btn">Explore Burger Recipes</a>
			    	</div>
			    </section>
				</div><!-- #panel2  --><!-- Chicken -->
			  <div class="content" id="panel3">
			    <section class="row1 clear flex">
				    <div class="small-12 large-6 column no-padding">
		   			  <img src="<?php echo get_template_directory_uri() . '/img/create_your_own.jpg' ?>" alt="create your own smashburger">
		   			</div>
				   	<div class="medium-6 large-3 column red-primary puzzle">
				   		<img src="<?php echo get_template_directory_uri() . '/img/menu_create.svg' ?>" alt="make your own burger icon" width="50">
				   		<h6 class="tan-text">Your <span class="brown-text">Smash</span></h6>
				   		<h6 class="tan-text">Your Way</h6>
				   	</div>
				   	<div class="red-tertiary small-12 medium-6 large-3 column create">
				   		<h6>Start Here</h6>
				   		<ul>
				   			<li>regular burger</li>
				   			<li>big burger</li>
				   			<li>grilled chicken</li>
				   			<li>crispy chicken</li>
				   			<li>black bean burger</li>
				   		</ul>
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="small-12 medium-6 large-3 column blue-bg options">
							<h6>bun</h6>
							<ul>
							    <li>egg bun</li>
							    <li>multi-grain bun</li>
							    <li>gluten free bun</li>
							    <li>chipotle bun</li>
							</ul>
							<i>*additional buns may be available by region</i>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-secondary options">
							<h6>toppings</h6>
							<ul id="toppings" class="clear">
							    <li>smash sauce</li>
							    <li>ketchup</li>
							    <li>lettuce</li>
							    <li>pickles</li>
							    <li>bbq</li>
							    <li>cucumbers</li>
							    <li>red onion</li>
							    <li>ranch</li>
							    <li>spinach</li>
							    <li>yellow mustard</li>
							    <li>grilled onions</li>
							    <li>tomato</li>
							    <li>spicy chipotle mayo</li>							  
							</ul>
							<i>*additional toppings may be available by region</i>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column brown options">
							<h6>Cheese</h6>
							<ul>
							    <li>aged swiss</li>
							    <li>blue cheese</li>
							    <li>goat cheese</li>
							    <li>pepper jack</li>
							    <li>sharp cheddar</li>
							</ul>
							<i>*additional cheeses may be available by region</i>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-primary options">
							<h6>add-ons</h6>
							<ul>
							    <li>applewood smoked bacon</li>
							    <li>sauteed crimini mushrooms</li>
							    <li>fresh sliced avocado</li>
							    <li>guacamole</li>
							    <li>fried egg</li>
							</ul>
							<i>*additional premium add-ons may be available by region</i>
				  	</div>
				  </section>
				  <section id="inquiry-submit" class="tan-bg">
				  	<a class="secondary-btn red-secondary tan-text">Create Your Own Now</a>
				  </section>
			  </div><!-- #panel3  --><!-- Create -->
	  	  <div class="content" id="panel4">
	  	    <section class="row1 clear flex">
	  		      <div class="menu slider small-12 medium-12 large-6 column">
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/cobb_salad.jpg' ?>" alt="smashburger cobb salad">
			   				</div>
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/harvest_salad.jpg' ?>" alt="smashburger harvest salad">
			   				</div>
			   			</div>
	  		   	<div class="small-12 large-6 column salads">
	  		   		<h6 class="white-text">our burgers have met</h6>
	  		   		<h6 class="white-text">their match</h6>
	  		   		<p class="white-text">(yep, they&rsquo;re that good)</p>
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
	  					<div class="flip">
	  						<div class="front">
	  							<h4>spinach &amp; goat cheese salad</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/spinach_salad.svg' ?>" alt="smashburger spinach salad">
	  						</div>
	  						<div class="back">
	  							<h4>spinach &amp; goat cheese salad</h4>
	  							<p>Spinach, goat cheese, raisins, dried cranberries, sunflower seeds, pumpkin seeds, cucumbers, tomatoes &amp; onions with balsamic vinaigrette. Choice to add tender marinated grilled or crispy chicken.</p>
	  							<a href="" class="brown-btn">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Harvest Salad</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/harvest_salad.svg' ?>" alt="smashburger harvest salad">
	  						</div>
	  						<div class="back">
	  							<h4>Harvest Salad</h4>
	  							<p>Fresh greens, blue cheese, raisins, dried cranberries, sunflower seeds, pumpkin seeds &amp; tomatoes with balsamic vinaigrette. Choice to add tender marinated grilled or crispy chicken.</p>
	  							<a class="red-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Cobb Salad</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/cobb_salad.svg' ?>" alt="smashburger cobb salad">
	  						</div>
	  						<div class="back">
	  							<h4>Cobb Salad</h4>
	  							<p>Fresh greens, blue cheese, sharp cheddar, fried egg, applewood smoked bacon, tomatoes &amp; onion with buttermilk ranch dressing. Choice to add tender marinated grilled or crispy chicken.</p>
	  							<a class="blue-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Baja Cobb Salad</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/baja_salad.svg' ?>" alt="smashburger baja cobb salad">
	  						</div>
	  						<div class="back">
	  							<h4>Baja Cobb Salad</h4>
	  							<p>Fresh greens, sharp cheddar, applewood smoked bacon, sliced jalape&ntilde;os, guacamole, tomatoes &amp; onions with spicy chipotle dressing. Choice to add tender marinated grilled or crispy chicken.</p>
	  							<a href="" class="darkred-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  </section>
	  	  </div><!-- #panel4  --><!-- Salads -->
	  	  <div class="content" id="panel5">
			    <section class="row1 clear flex">
				    <div class="menu slider small-12 large-6 column">
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/veggie_frites.jpg' ?>" alt="smashburger veggie frites">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/onion_rings.jpg' ?>" alt="smashburger haystack onion rings">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/menu_smashfries.jpg' ?>" alt="smashburger fries">
		   				</div>
		   			</div>
				   	<div class="medium-6 large-3 column red-primary menu-locate sides">
				   		<img src="<?php echo get_template_directory_uri() . '/img/sides_pin.png' ?>" alt="smashburger local sides">
				   		<p>Finding Your Local</p>
				   		<h6>Side</h6>
				   		<select selected="More Local Burgers">
				   			<option selected>Explore Local Recipes</option>
				   			<option data-zip="36066">Alabama</option>
				   			<option data-zip="T3G 5T4">Calgary</option>
				   			<option data-zip="28211">Charlotte</option>
				   			<option data-zip="">Delran</option>
				   			<option data-zip="40202">Kentucky</option>
				   			<option data-zip="70115">New Orleans</option>
				   			<option data-zip="45459">Ohio</option>
				   			<option data-zip="19087">Radnor</option>
				   			<option data-zip="27615">Raleigh</option>
				   			<option data-zip="54016">Wisconsin</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-12 medium-6 large-3 column no-padding local-burger sides">
				   		<div class="flip">
					   		<div class="vertical-align front locating">
					   			<h4 class="white-text">your local side</h4>
					   			<img class="question" src="<?php echo get_template_directory_uri() . '/img/question_mark.svg' ?>" alt="finding your local smashburger">
					   		</div>
					   		<div class="back">
					   			<a class="red-btn" href="">Hungry?<span></span></a>
					   		</div>
					   	</div>
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="flip-container small-12 medium-6 large-3 column dark-blue-bg no-padding">
							<div class="flip">
								<div class="front">
									<h4>Smash Fries</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/smash_fries.svg' ?>" alt="smashburger smash fries">
								</div>
								<div class="back">
									<h4>Smash Fries</h4>
									<p>Our signature fries are tossed in Italian olive oil, rosemary &amp; garlic.</p>
									<a href="" class="blue-btn">Hungry?<span></span></a>
								</div>
					  	</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>French Fries</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/french_fries.svg' ?>" alt="smashburger french fries">
								</div>
								<div class="back">
									<h4>French Fries</h4>
									<p>French fries perfectly seasoned with salt.</p>
									<a href="" class="red-btn">Hungry?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
				  		<div class="flip">
					  		<div class="front">
									<h4>Sweet Potato Fries</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/sweet_fries.svg' ?>" alt="smashburger sweet potato fries">
								</div>
								<div class="back">
									<h4>Sweet Potato Fries</h4>
									<p>Sweet Potato Fries perfectly seasoned with salt</p>
									<a class="brown-btn">Hungry ?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Haystack Onions</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/onion_rings.svg' ?>" alt="smashburger haystack onion rings">
								</div>
								<div class="back">
									<h4>Haystack Onions</h4>
									<p>Thin yellow onion slices battered &amp; fried.</p>
									<a class="darkred-btn">Hungry?<span></span></a>
								</div>
							</div>
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
			  			<div class="flip">
			  				<div class="front">
					  			<h4>Spicy Buffalo Fries</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/spicy_fries.svg' ?>" alt="smashburger spicy buffalo fries">
					  		</div>
					  		<div class="back">
					  			<h4>Spicy Buffalo Fries</h4>
					  			<p>Dry seasoned with Frank&rsquo;s&reg; RedHot&reg; &amp; served with a side of ranch dressing.</p>
					  			<a class="brown-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Fried Pickles</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/fried_pickles.svg' ?>" alt="smashburger fried pickles">
					  		</div>
					  		<div class="back">
					  			<h4>Fried Pickles</h4>
					  			<p>Garlic pickles battered &amp; fried.</p>
					  			<a class="darkred-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Veggie Frites</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/veggie_fries.svg' ?>" alt="smashburger veggie frites">
					  		</div>
					  		<div class="back">
					  			<h4>Veggie Frites</h4>
					  			<p>Fresh green beans &amp; carrot strips, flash fried.</p>
					  			<a class="blue-btn">Hungry?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Side Garden Salad</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/garden_salad.svg' ?>" alt="smashburger side salad">
					  		</div>
					  		<div class="back">
					  			<h4>Side Garden Salad</h4>
					  			<p>A mix of fresh greens, tomatoes, cucumbers, onions &amp; shredded cheddar with choice of dressing.</p>
					  			<a class="red-btn">Hungry?<span></span></a>
					  		</div>
			    	</div>
			    </section>
				</div><!-- #panel5  --><!-- Sides -->
	  	  <div class="content" id="panel6">
			    <section class="row1 clear flex">
				    <div class="menu small-12 large-6 column no-padding">
		   				<img src="<?php echo get_template_directory_uri() . '/img/shakes_hero.jpg' ?>" alt="smashburger hand-spun shakes">
		   			</div>
				   	<div class="medium-6 large-3 column red-primary menu-locate shakes">
				   		<img src="<?php echo get_template_directory_uri() . '/img/shake_pin.png' ?>" alt="local smashburger shakes">
				   		<p>Finding Your Local</p>
				   		<h6>Shake</h6>
				   		<select>
				   			<option selected>Explore Local Recipes</option>
				   			<option data-zip="T3G 5T4">Canada</option>
				   			<option data-zip="28211">Charlotte</option>
				   			<option data-zip="30324">Georgia</option>
				   			<option data-zip="83642">Idaho</option>
				   			<option data-zip="49546">Michigan</option>
				   			<option data-zip="63017">Missouri</option>
				   			<option data-zip="32266">Neptune Beach</option>
				   			<option data-zip="84119">Utah</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-12 medium-6 large-3 column no-padding local-burger shakes">
				   		<div class="flip">
					   		<div class="vertical-align front locating">
					   			<h4 class="white-text">your local shake</h4>
					   			<img class="question" src="<?php echo get_template_directory_uri() . '/img/question_mark.svg' ?>" alt="finding your local smashburger">
					   		</div>
					   		<div class="back">
					   			<a class="red-btn" href="">Thirsty?<span></span></a>
					   		</div>
					   	</div>
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="flip-container small-12 medium-6 large-3 column dark-blue-bg no-padding">
							<div class="flip">
								<div class="front">
									<h4>Chocolate</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/chocolate_shake.svg' ?>" alt="smashburger chocolate shake">
								</div>
								<div class="back">
									<h4>Chocolate</h4>
									<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; chocolate syrup.</p>
									<a href="" class="blue-btn">Hungry?<span></span></a>
								</div>
					  	</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Vanilla</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/vanilla_shake.svg' ?>" alt="smashburger vanilla shake">
								</div>
								<div class="back">
									<h4>Vanilla</h4>
									<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream</p>
									<a href="" class="darkred-btn">Thirsty?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
				  		<div class="flip">
					  		<div class="front">
									<h4>Strawberry</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/strawberry_shake.svg' ?>" alt="smashburger starwberry shake">
								</div>
								<div class="back">
									<h4>Strawberry</h4>
									<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; strawberry syrup.</p>
									<a class="brown-btn">Thirsty?<span></span></a>
								</div>
							</div>
				  	</div>
				  	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
				  		<div class="flip">
				  			<div class="front">
									<h4>Oreo</h4>
									<img src="<?php echo get_template_directory_uri() . '/img/oreo_shake.svg' ?>" alt="smashburger oreo shake">
								</div>
								<div class="back">
									<h4>Oreo</h4>
									<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; crushed Oreos.</p>
									<a class="red-btn">Thirsty?<span></span></a>
								</div>
							</div>
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
			  			<div class="flip">
			  				<div class="front">
					  			<h4>Nutterbutter</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/nutter_shake.svg' ?>" alt="smashburger butter butter shake">
					  		</div>
					  		<div class="back">
					  			<h4>Nutterbutter</h4>
					  			<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; crushed Nutter Butter cookies.</p>
					  			<a class="brown-btn">thirsty?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Butterfinger</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/butterfinger_shake.svg' ?>" alt="smashburger butterfinger shake">
					  		</div>
					  		<div class="back">
					  			<h4>Butterfinger</h4>
					  			<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; crushed Butterfinger.</p>
					  			<a class="red-btn">thirsty?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Salted Carmel</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/carmel_shake.svg' ?>" alt="smashburger carmel shake">
					  		</div>
					  		<div class="back">
					  			<h4>Salted Carmel</h4>
					  			<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream &amp; Salted caramel syrup.</p>
					  			<a class="blue-btn">thirsty?<span></span></a>
					  		</div>
					  	</div>
			    	</div>
			    	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
			    		<div class="flip">
			    			<div class="front">
					  			<h4>Chocolate Oreo</h4>
					  			<img src="<?php echo get_template_directory_uri() . '/img/chocolate_oreo_shake.svg' ?>" alt="smashburger chocolate oreo shake">
					  		</div>
					  		<div class="back">
					  			<h4>Chocolate Oreo</h4>
					  			<p>Hand-spun with vanilla H&auml;agen-Dazs ice cream, chocolate syrup &amp; crushed Oreos.</p>
					  			<a class="darkred-btn">thirsty?<span></span></a>
					  		</div>
			    	</div>
			    </section>
				</div><!-- #panel6  --><!-- Shakes -->
	  	  <div class="content" id="panel7">
	  	    <section class="row1 clear flex">
	  		      <div class="menu slider small-12 medium-12 large-6 column">
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/grilled_cheese.jpg' ?>" alt="smashburger grilled cheese">
			   				</div>
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/chicken_fingers.jpg' ?>" alt="smashburger chicken strips">
			   				</div>
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/hot_dog.jpg' ?>" alt="smashburger hot dog">
			   				</div>
			   				<div class="slide">
			   					<img src="<?php echo get_template_directory_uri() . '/img/kids_smash.jpg' ?>" alt="kids smashburger">
			   				</div>
			   			</div>
	  		   	<div class="small-6 column kids">
	  		   		<h6 class="redtext-primary">Get kudos from</h6>
	  		   		<h6 class="redtext-primary">the kiddos</h6>
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-6 large-3 column light-brown-bg flip-container no-padding">
	  					<div class="flip">
	  						<div class="front">
	  							<h4>Kids Smash</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/kids_smash.svg' ?>" alt="kids smashburger">
	  						</div>
	  						<div class="back">
	  							<h4>Kids Smash</h4>
	  							<p>American cheese, egg bun served with fries &amp; a kid&rsquo;s fountain drink.</p>
	  							<a href="" class="brown-btn">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column red-secondary flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Hot Dog</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/hot_dog.svg' ?>" alt="smashburger hot dog">
	  						</div>
	  						<div class="back">
	  							<h4>Hot Dog</h4>
	  							<p>All beef hot dog, grilled &amp; served with a toasted bun, fries &amp; kid&rsquo;s fountain drink.</p>
	  							<a class="red-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column dark-blue-bg flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Chicken Strips</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/chicken_strips.svg' ?>" alt="smashburger chicken strips">
	  						</div>
	  						<div class="back">
	  							<h4>Chicken Strips</h4>
	  							<p>Three tender marinated crispy chicken strips served with fries &amp; a kid&rsquo;s fountain drink.</p>
	  							<a class="blue-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  	<div class="small-12 medium-6 large-3 column red-tertiary flip-container no-padding">
	  		  		<div class="flip">
	  		  			<div class="front">
	  							<h4>Grilled Cheese</h4>
	  							<img src="<?php echo get_template_directory_uri() . '/img/grilled_cheese.svg' ?>" alt="smashburger grilled cheese">
	  						</div>
	  						<div class="back">
	  							<h4>Grilled Cheese</h4>
	  							<p> American cheese on buttered loaf bread, served with fries &amp; a kid&rsquo;s fountain drink.</p>
	  							<a class="darkred-btn" href="">Hungry?<span></span></a>
	  						</div>
	  					</div>
	  		  	</div>
	  		  </section>
	  	  </div><!-- #panel7  --><!-- Kids -->
			</div><!-- .tabs-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>