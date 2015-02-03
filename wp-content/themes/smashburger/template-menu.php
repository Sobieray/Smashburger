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
			<div class="menu-links">
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
					<a href="" download>Download</a>
					<a href="" print>Print</a>
				</div>
			</div>
			<div class="tabs-content">
			  <div class="content active" id="panel1">
			    <section class="row1 clear flex">
				    <div class="menu slider small-12 medium-6 column">
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/menu_burger_slide1.jpg' ?>" alt="classic smashburger">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/fries.jpg' ?>" alt="classic smashburger">
		   				</div>
		   				<div class="slide">
		   					<img src="<?php echo get_template_directory_uri() . '/img/menu_burger_slide1.jpg' ?>" alt="classic smashburger">
		   				</div>
		   			</div>
				   	<div class="small-6 medium-3 column red-primary">
				   		<img src="" alt="">
				   		<p>don&rsquo;t see a local</p>
				   		<h6>burger ?</h6>
				   		<p class="chevron red-text">explore our unique burger builds by region</p>
				   		<select selected="More Local Burgers">
				   			<option selected>More Local Burgers</option>
				   			<option>Alabama</option>
				   			<option disabled>California</option>
				   			<optgroup>
				   				<option><p>Los Angeles</p></option>
				   				<option>Sacramento</option>
				   				<option>San Diego</option>
				   				<option>San Fransisco</option>
				   			</optgroup>
				   			<option>Colorado</option>
				   			<option>Connecticut</option>
				   			<option disabled>Florida</option>
				   			<optgroup>
				   				<option>Central Florida</option>
				   				<option>Jacksonville</option>
				   				<option>Miami</option>
				   				<option>Tampa</option>
				   			</optgroup>
				   			<option>Georgia</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-6 medium-3 column">
				   		<p class="white-text">your local burger</p>
				   		<img src="">
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="small-12 medium-3 column blue-bg">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-secondary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column brown">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-primary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-3 column light-brown-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-primary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column blue-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-secondary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    </section>
				</div><!-- #panel1  -->
			  <div class="content" id="panel2">
			    <section class="row1 clear flex">
				    <div class="small-12 medium-6 column no-padding">
		   			  <img src="<?php echo get_template_directory_uri() . '/img/menu_burger_slide1.jpg' ?>" alt="classic smashburger">
		   			</div>
				   	<div class="small-6 medium-3 column red-primary">
				   		<img src="" alt="">
				   		<p>don&rsquo;t see a local</p>
				   		<h6>burger ?</h6>
				   		<p class="chevron red-text">explore our unique burger builds by region</p>
				   		<select>
				   			<option selected>More Local Burgers</option>
				   			<option>Alabama</option>
				   			<option disabled>California</option>
				   			<optgroup>
				   				<option><p>Los Angeles</p></option>
				   				<option>Sacramento</option>
				   				<option>San Diego</option>
				   				<option>San Fransisco</option>
				   			</optgroup>
				   			<option>Colorado</option>
				   			<option>Connecticut</option>
				   			<option disabled>Florida</option>
				   			<optgroup>
				   				<option>Central Florida</option>
				   				<option>Jacksonville</option>
				   				<option>Miami</option>
				   				<option>Tampa</option>
				   			</optgroup>
				   			<option>Georgia</option>
				   		</select>
				   	</div>
				   	<div class="red-secondary small-6 medium-3 column">
				   		<p class="white-text">your local burger</p>
				   		<img src="">
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="small-12 medium-3 column blue-bg">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-secondary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column brown">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-primary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-3 column light-brown-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-primary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column blue-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-secondary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    </section>
			  </div><!-- #panel2  -->
			  <div class="content" id="panel3">
			    <section class="row1 clear flex">
				    <div class="small-12 medium-6 column no-padding">
		   			  <img src="<?php echo get_template_directory_uri() . '/img/angus_burger.png' ?>" alt="classic smashburger">
		   			</div>
				   	<div class="small-6 medium-3 column red-primary">
				   		<img src="" alt="">
				   		<p>don&rsquo;t see a local</p>
				   		<h6>burger ?</h6>
				   		<p class="chevron red-text">explore our unique burger builds by region</p>
				   	</div>
				   	<div class="red-secondary small-6 medium-3 column">
				   		<p class="white-text">your local burger</p>
				   		<img src="">
				   	</div>
					</section>
					<section id="row2" class="clear flex">
						<div class="small-12 medium-3 column blue-bg">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-secondary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column brown">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  	<div class="small-12 medium-3 column red-primary">
							<h4>Classic Smash</h4>
							<img src="" alt="">
				  	</div>
				  </section>
			  	<section id="row3" class="clear flex">
			  		<div class="small-12 medium-3 column light-brown-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-primary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column blue-bg">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    	<div class="small-12 medium-3 column red-secondary">
			  			<h4>Classic Smash</h4>
			  			<img src="" alt="">
			    	</div>
			    </section>
			  </div><!-- #panel3  -->
	  	  <div class="content" id="panel4">
	  	    <section class="row1 clear flex">
	  		    <div class="small-12 medium-6 column no-padding">
	     			  <img src="<?php echo get_template_directory_uri() . '/img/fries.jpg' ?>" alt="classic smashburger">
	     			</div>
	  		   	<div class="small-6 medium-3 column red-primary">
	  		   		<img src="" alt="">
	  		   		<p>don&rsquo;t see a local</p>
	  		   		<h6>burger ?</h6>
	  		   		<p class="chevron red-text">explore our unique burger builds by region</p>
	  		   	</div>
	  		   	<div class="red-secondary small-6 medium-3 column">
	  		   		<p class="white-text">your local burger</p>
	  		   		<img src="">
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-3 column blue-bg">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-secondary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column brown">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-primary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  </section>
	  	  	<section id="row3" class="clear flex">
	  	  		<div class="small-12 medium-3 column light-brown-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-primary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column blue-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-secondary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    </section>
	  	  </div><!-- #panel4  -->
	  	  <div class="content" id="panel5">
	  	    <section class="row1 clear flex">
	  		    <div class="small-12 medium-6 column no-padding">
	     			  <img src="<?php echo get_template_directory_uri() . '/img/lettuce.png' ?>" alt="classic smashburger">
	     			</div>
	  		   	<div class="small-6 medium-3 column red-primary">
	  		   		<img src="" alt="">
	  		   		<p>don&rsquo;t see a local</p>
	  		   		<h6>burger ?</h6>
	  		   		<p class="chevron red-text">explore our unique burger builds by region</p>
	  		   	</div>
	  		   	<div class="red-secondary small-6 medium-3 column">
	  		   		<p class="white-text">your local burger</p>
	  		   		<img src="">
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-3 column blue-bg">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-secondary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column brown">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-primary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  </section>
	  	  	<section id="row3" class="clear flex">
	  	  		<div class="small-12 medium-3 column light-brown-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-primary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column blue-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-secondary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    </section>
	  	  </div><!-- #panel5  -->
	  	  <div class="content" id="panel6">
	  	    <section class="row1 clear flex">
	  		    <div class="small-12 medium-6 column no-padding">
	     			  <img src="<?php echo get_template_directory_uri() . '/img/tomato.png' ?>" alt="classic smashburger">
	     			</div>
	  		   	<div class="small-6 medium-3 column red-primary">
	  		   		<img src="" alt="">
	  		   		<p>don&rsquo;t see a local</p>
	  		   		<h6>burger ?</h6>
	  		   		<p class="chevron red-text">explore our unique burger builds by region</p>
	  		   	</div>
	  		   	<div class="red-secondary small-6 medium-3 column">
	  		   		<p class="white-text">your local burger</p>
	  		   		<img src="">
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-3 column blue-bg">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-secondary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column brown">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-primary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  </section>
	  	  	<section id="row3" class="clear flex">
	  	  		<div class="small-12 medium-3 column light-brown-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-primary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column blue-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-secondary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    </section>
	  	  </div><!-- #panel6  -->
	  	  <div class="content" id="panel7">
	  	    <section class="row1 clear flex">
	  		    <div class="small-12 medium-6 column no-padding">
	     			  <img src="<?php echo get_template_directory_uri() . '/img/sky_background.jpg' ?>" alt="classic smashburger">
	     			</div>
	  		   	<div class="small-6 medium-3 column red-primary">
	  		   		<img src="" alt="">
	  		   		<p>don&rsquo;t see a local</p>
	  		   		<h6>burger ?</h6>
	  		   		<p class="chevron red-text">explore our unique burger builds by region</p>
	  		   	</div>
	  		   	<div class="red-secondary small-6 medium-3 column">
	  		   		<p class="white-text">your local burger</p>
	  		   		<img src="">
	  		   	</div>
	  			</section>
	  			<section id="row2" class="clear flex">
	  				<div class="small-12 medium-3 column blue-bg">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-secondary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column brown">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  	<div class="small-12 medium-3 column red-primary">
	  					<h4>Classic Smash</h4>
	  					<img src="" alt="">
	  		  	</div>
	  		  </section>
	  	  	<section id="row3" class="clear flex">
	  	  		<div class="small-12 medium-3 column light-brown-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-primary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column blue-bg">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    	<div class="small-12 medium-3 column red-secondary">
	  	  			<h4>Classic Smash</h4>
	  	  			<img src="" alt="">
	  	    	</div>
	  	    </section>
	  	  </div><!-- #panel7  -->
			</div><!-- .tabs-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>