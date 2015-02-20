<?php
/**
 * Template Name: Home
 *
 * @package smashburger
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main clear" role="main">
			<header>
				<h1>Smash Burger Home Page</h1>
			</header>
			<section id="first" class="clear flex hide-for-small" data-speed="8" data-type="background" >
				<div class="parallax1 flex">
					<span class="red-primary"></span>
					<div class="lifestyle" data-type="sprite" data-offsetY="200" data-Xposition="30%" data-speed="-3"></div>
					<div class="burger" data-type="sprite" data-offsetY="150" data-Xposition="100%" data-speed="9"></div>
					<p>Becauseideserveit<span class="redtext-primary">burger</span></p>
					<div class="avocado" data-type="sprite" data-offsetY="600" data-Xposition="110%" data-speed="4"></div>
					<div class="jalapeno" data-type="sprite" data-offsetY="700" data-Xposition="90%" data-speed="2"></div>	
					<aside class="small-8 column no-padding-left location-widget" width="50%">
						<h2>your nearest smashburger location</h2>
						<div class="placeable small-6 column no-padding"></div>
						<div class="placeable-img small-6 column no-padding">
							<img src="<?php echo get_template_directory_uri() . '/img/store_front.jpg'; ?>" alt="smashburger interior"/>
						</div>
						<div class="lettuce" data-type="sprite" data-offsetY="566" data-Xposition="0%" data-speed="4"></div>
					</aside>	
				</div>
			</section><!-- #first -->
		</main><!-- #main -->


		<section id="second" class="parallax blue-bg flex clear hide-for-small" data-speed="7" data-offsetY="205" data-type="background">
			<div class="parallax2 flex">
				<div class="small-6 column no-padding">
					<div class="beer-pairing" data-type="sprite" data-offsetY="-500" data-Xposition="10%" data-speed="-2"></div>
					<div class="colorado-burger" data-type="sprite" data-offsetY="520" data-Xposition="25%" data-speed="4"></div>
				</div>
				<div class="small-6 column brown-overlay no-padding">
					<div class="box-padding">
						<h2 class="white-text">local love</h2>
						<p class="sub-text white-text">Thinking local is one thing, living it is something else all together. With the that in mind,  we&lsquo;ve created 44 unique burgers specifically for where you call home. To bring even more of the outside in, we&lsquo;ve sourced the best beers from your neck of the woods and have paired them thoughtfully with the perfect burgers from our menu.</p>
					</div>
					<a class="brown-btn right-side-btn" href="" data-hover="">discover yours<span></span></a>
				</div>
			</div>
		</section><!-- #second -->


		<section id="third" class="hide-for-small" data-speed="7" data-offsetY="120" data-type="background">
			<div class="parallax3 clear flex">

				<div class="small-6 column no-padding">
					<div class="tomato" data-type="sprite" data-offsetY="350" data-Xposition="150%" data-speed="5"></div>
					<div class="box-padding">
						<h2 class="brown-text">Certified Angus Beef</h2>
						<p class="sub-text brown-text">Great burgers start with great meat. That’s why we only cook with fresh, never frozen, 100% Certified Angus beef. Period.</p>
					</div>
					<a class="tan-btn brown-text" href="" data-hover="">meet the meat<span></span></a>
				</div>
				
				<div class="small-6 column no-padding-left">
					<div class="no-padding-left">
						<div class="fresh" data-type="sprite" data-offsetY="-610" data-Xposition="50%" data-speed="-3"></div>
		  			<div class="farm"></div>
		  			<div class="dancing" data-type="sprite" data-offsetY="1320" data-Xposition="85%" data-speed="2"></div>
					</div>
				</div>
			</div><!-- .parallax3 -->
		</section><!-- #third -->
		<section id="forth" class="clear red-primary hide-for-small" data-speed="7" data-offsetY="120" data-type="background">
			<div class="parallax4 clear flex">
				<div class="small-3 column no-padding">
					<div class="big-burger" data-type="sprite" data-offsetY="-1375" data-Xposition="0%" data-speed="-2"></div>
				</div>
				<div class="small-6 column">
					<h2 class="white-text">Welcome To The Smashclub</h2>
					<ul>
						<li>News</li>
						<li>Promos</li>
						<li>Coupons</li>
						<li>Inspiration</li>
					</ul>
					<form action="http://smashburger.fbmta.com/members/subscribe.aspx" method="post" name="smashclub-form-global" id="smashclub-form-global" onSubmit="return validateEmail(this.EmailAddress.value);">
						<input type="hidden" name="Action" id="Action" value="subscribe" size="30" maxlength="200">
						<input type="hidden" value="45097156610" name="ListID">
						<input type="hidden" value="4a1f3487-679e-4ca6-bccc-0ee2fb40dab5 " name="SiteGUID">  
						<input type="hidden" value="https://smashburger.com/thank-you/" name="ReturnURL">
						<input type="hidden" value="we" name="InputSource">
				    <input type="text" value="email address" name="EmailAddress" maxlength="200" id="EmailAddress">
						<input type="submit" name="submit" value="I'M IN!" class="form-submit">
					</form>
				</div>
				<div class="small-3 column no-padding">
					<div class="lettuce" data-type="sprite" data-offsetY="580" data-Xposition="100%" data-speed="4"></div>
					<div class="onion" data-type="sprite" data-offsetY="-430" data-Xposition="110%" data-speed="-3"></div>
				</div>
			</div><!-- .parallax4 -->
			
		</section><!-- #forth -->
		<section id="fifth" class="clear hide-for-small" data-speed="7" data-type="background">
			<div class="parallax5 flex">
				<div class="small-3 column no-padding">
					<div class="onion" data-type="sprite" data-offsetY="500" data-Xposition="120%" data-speed="7"></div>
	  		  <div class="avocado" data-type="sprite" data-offsetY="2180" data-Xposition="0%" data-speed="2"></div>
			  </div>
				<div class="small-9 column no-padding flex">
					<div class="small-4 column no-padding">
						<div class="row pro-cycle"></div>
						<div class="row pro-cycle-logo"></div>
					</div>
					<div class="small-8 column no-padding">
						<div class="blue-overlay">
							<div class="box-padding" data-speed="-5" data-offsetY="-50" data-type="background">
								<h2 class="white-text">Usa Pro Challenge</h2>
								<p class="sub-text white-text">We&lsquo;re absolutely head over wheels to be the Official Sponsor of the one of the largest Cycling events in US history- right here in the Rocky Mountains, our back yard.</p>
								<a class="blue-btn right-side-btn" href="">ride on!<span></span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div><!-- .parallax5 -->
		</section><!-- #fifth -->
		<section id="sixth" class="clear red-secondary hide-for-small" data-speed="0" data-type="background">
			<div class="parallax6 flex">
				<div class="small-6 column no-padding">
					<div class="box-padding">
						<h2 class="white-text">spread the love</h2>
						<p class="sub-text white-text">When it&lsquo;s hard to tell that special someone just how you feel, we&lsquo;ve got you covered. Nothing says “I love you" quite like gift of mouthwatering deliciousness. </p>
					</div>
					<a class="red-btn" href="">buy a gift card<span></span></a>
				</div>
				<div class="small-6 column no-padding-left dark-red-overlay">
					<div class="gift-cards" data-type="sprite" data-offsetY="1600" data-Xposition="90%" data-speed="3"></div>
				</div>
				
			</div><!-- .parallax6 -->	
		</section><!-- #sixth -->
		<section id="seventh" class="hide-for-small" data-speed="7" data-type="background">
			<div class="parallax7 flex">
				<div class="small-3 column no-padding-left">
					<div class="soccer-ball" data-type="sprite" data-offsetY="-620" data-Xposition="10%" data-speed="-6"></div>
	  		  <div class="soccer-player" data-type="sprite" data-offsetY="1830" data-Xposition="0%" data-speed="3"></div>
			  </div>
				<div class="small-9 column no-padding flex">
					<div class="small-4 column no-padding">
						<div class="row smash-icon" data-type="sprite" data-offsetY="1040" data-Xposition="45%" data-speed="5"></div>
						<div class="row burger-smash"></div>
					</div>
					<div class="small-8 column no-padding">
						<div class="">
							<div class="">
								<div class="smasher" data-type="sprite" data-offsetY="-2480" data-Xposition="50%" data-speed="-2"></div><!--  -->
								<h2 class="brown-text">Smashing Is <br><span>Better</span></h2>
	  		  			<div class="burger-paddy" data-type="sprite" data-offsetY="2520" data-Xposition="36%" data-speed="2"></div><!--  -->
								<a class="tan-btn brown-text right-side-btn" href="">see why<span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .parallax7 -->
		</section><!-- #seventh -->
		<?php
		$backgroundImage = get_field('promotion-image');
		?>
		<style type="text/css">
			#eight {
				background-image: url(<?php echo $backgroundImage ;?>);
			}
		</style>
		<section id="eight" class="clear flex hide-for-small" data-speed="7" data-offsetY="818" data-type="background">
			<div class="small-6 column blue-overlay no-padding">
				<div class="box-padding">
					<h2 class="white-text"><?php the_field('promotion-heading'); ?></h2>
					<p class="sub-text white-text"><?php the_field('promotion-text'); ?></p>
					<a class="blue-btn" href="<?php the_field('button-url'); ?>"><?php the_field('promotion-button'); ?><span></span></a>
				</div>
			</div>

		</section><!-- #eight -->
		<section id="nine" class="clear">
			<a class="small-12 medium-4 column red-primary no-padding locate" href="">
				
				<!-- <h6>Locate</h6> -->
			</a>
			<a class="small-12 medium-4 column red-secondary no-padding order" href="">
				
			</a>
			<a class="small-12 medium-4 column brown no-padding utencile" href="">
				
				<!-- <h6>Menu</h6> -->
			</a>
		</section><!-- #nine -->
		<article id="social" class="hide-for-small">
			<h1 class="brown-text">#smashlife</h1>
			<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script><div class="tintup" data-id="smashburger" data-columns="4" style="height:500px;width:100%;"></div>
		</article>
	</div><!-- #primary -->
	<script language="Javascript" type="text/javascript">
	  function validateEmail(emailAddress) {
	    /* NOTE:  This regular expression is identical to the one used by Enterprise for e-mail address validation */
	    var regExp = /^\s*[a-zA-Z\d][a-zA-Z\d\.!#$%&'*+\-\/=?^_`{|}~]*@([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}\s*$/;
	    if (emailAddress.length <= 200 && regExp.test(emailAddress)) {
	       return true;
	    } else {
	       alert("Invalid e-mail address");
	       return false;
	    }
	  }
	</script>
<?php get_footer(); ?>

