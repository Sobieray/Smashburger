<?php
/**
 * Template Name: Criteria
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1>Franchise Criteria</h1>
	</div>
	<div id="primary" class="content-area">
		<?php get_template_part('franchise-navigation'); ?>
		<main id="criteria" class="clear">
			<div class="small-12 medium-8 row">
				<p class="center">Smashburger is seeking multi-unit development partners.</br>To be considered, individuals must meet the following.</p>
			</div>
			<div class="red-secondary small-12 medium-5 row">
				<h2 class="white-text center hide-for-small-only">Please select the criteria that you meet</h2>
			</div>
			<form id="franchise-criteria" action="javascript:void(0)" onsubmit="checkBox()">
				<div class="small-12 medium-11 row" data-equalizer>
					<div class="small-12 medium-4 column brown small-padding ribbon" data-equalizer-watch>
						<p class="white-text center">Demonstrates enthusiasm, drive and passion, and a proven record of success in the restaurant industry.</p>
						<input id="record" type="checkbox" name="criteria">
						<label for="record"></label>
					</div>
					<div class="small-12 medium-4 column red-secondary small-padding bottle" data-equalizer-watch>
						<p class="white-text center">Ability to obtain a liquor license</br>(where applicable).</p>
						<input id="liquor" type="checkbox" name="criteria" >
						<label for="liquor"></label>
					</div>
					<div class="small-12 medium-4 column brown small-padding store" data-equalizer-watch>
						<p class="white-text center">Multi-unit restaurant management experience as an owner and / or operator, real estate &amp; trade area experience in development territory.</p>
						<input id="experience" type="checkbox" name="criteria">
						<label for="experience"></label>
					</div>
				</div>
				<div class="small-12 medium-11 row" data-equalizer>
					<div class="small-12 medium-4 column red-secondary small-padding people" data-equalizer-watch>
						<p class="white-text center">Local market knowledge and willingness to build a dedicated team for Smashburger.</p>
						<input id="market" type="checkbox" name="criteria">
						<label for="market"></label>
					</div>
					<div class="small-12 medium-4 column brown small-padding chart" data-equalizer-watch>
						<p class="white-text center">$1.5 million in net worth</br>(individual or partnership).*</p>
						<input id="net" type="checkbox" name="criteria">
						<label for="net"></label>
					</div>
					<div class="small-12 medium-4 column red-secondary small-padding droplet" data-equalizer-watch>
						<p class="white-text center">$500K in liquid assets</br>(individual or partnership).*</p>
						<input id="assets" type="checkbox" name="criteria">
						<label for="assets"></label>
					</div>
					<input type="submit">
				</div>
			</form>
		</main><!-- main -->
		<article id="steps">
			<header>
				<h1 class="brown-text">Steps to owning your own smashburger</h1>
			</header>
			<section>
				<span>1</span>
				<h5>Complete and submit an online inquiry form.</h5>
			</section>
			<section>
				<span>2</span>
				<h5>Telephone interview with the Smashburger franchise team.</h5>
			</section>
			<section>
				<span>3</span>
				<h5>Complete and submit a franchise application.</h5>
			</section>
			<section>
				<span>4</span>
				<h5>Receive and review the Franchise Disclosure Document.</h5>
			</section>
			<section>
				<span>5</span>
				<h5>Preliminary approval on territory and development.</h5>
			</section>
			<section>
				<span>6</span>
				<h5>Schedule and attend a Discovery Day in Denver.</h5>
			</section>
			<section>
				<span>7</span>
				<h5>Final approval and franchise awarded.</h5>
			</section>
			<footer class="red-secondary">
				<a href="<?php echo site_url();?>/franchising/inquire-within/" class="secondary-btn tan-bg redtext-secondary">submit an inquiry</a>
			</footer>

		</article>
	</div><!-- #primary -->
	<div id="modal1">
		<div class="small-12 dark-overlay small-padding">
			<div class="small-8 medium-6 row tan-bg modal">
				<span>X</span>
				<h5 class="redtext-secondary">All criteria met!</h5>
				<p class="brown-text">we invite you to submit an inquiry.</p>
				<a class="red-secondary secondary-btn white-text" href="<?php echo site_url();?>/franchising/inquire-within/">submit an inquiry</a>
			</div>
		</div>
	</div>
	<div id="modal2">
		<div class="small-12 dark-overlay small-padding">
			<div class="small-8 medium-6 row tan-bg modal">
				<span>X</span>
				<p class="brown-text">Don't meet all of our criteria but still want to speak with someone at Smashburger about Franchising? Just click here to fill out our inquiry form and we will be in touch shortly.</p>
				<a class="red-secondary secondary-btn white-text" href="<?php echo site_url();?>/franchising/inquire-within/">submit an inquiry</a>
			</div>
		</div>
	</div>
<?php get_footer('custom'); ?>
<script type="text/javascript">
	$('#modal1 span, #modal2 span').click(function() {
		$('#modal2, #modal1').fadeOut(250);
	});
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
