<?php
/**
 * Template Name: Meet Us
 *
 * @package smashburger
 */

get_header(); ?>
	<?php
		$team_member_1_image = get_field('team_member_1_image');
		$team_member_2_image = get_field('team_member_2_image');
		$team_member_3_image = get_field('team_member_3_image');
		$team_member_4_image = get_field('team_member_4_image');
 	?>
	<div class="header">
		<h1>Nice to meet you</h1>
	</div>
	<div id="primary" class="content-area">
		<?php get_template_part('franchise-navigation'); ?>
		<main id="meet-us" class="clear" data-equalizer>
			<div class="small-12 medium-8 column no-padding" data-equalizer-watch>
				<h4 class="brown">Our fran dev team</h4>
				<dl class="accordion" data-accordion>
				  <dd class="accordion-navigation clear">
				    <a class="clear" href="#panel1b"><img src="<?php echo $team_member_1_image['url']; ?>" alt="<?php echo $team_member_1_image['alt']; ?>"><h6><?php echo get_field('team_member_1'); ?></h6><p><?php echo get_field('team_member_1_title'); ?></p></a>
				    <div id="panel1b" class="content">
				    	<?php echo get_field('team_member_1_bio'); ?>
				    </div>
				  </dd>
				  <dd class="accordion-navigation clear">
				    <a class="clear" href="#panel2b"><img src="<?php echo $team_member_2_image['url']; ?>" alt="<?php echo $team_member_2_image['alt']; ?>"><h6><?php echo get_field('team_member_2'); ?></h6><p><?php echo get_field('team_member_2_title'); ?></p></a>
				    <div id="panel2b" class="content">
				      <?php echo get_field('team_member_2_bio'); ?>
				    </div>
				  </dd>
				  <dd class="accordion-navigation clear">
				    <a class="clear" href="#panel3b"><img src="<?php echo $team_member_3_image['url']; ?>" alt="<?php echo $team_member_3_image['alt']; ?>"><h6><?php echo get_field('team_member_3'); ?></h6><p><?php echo get_field('team_member_3_title'); ?></p></a>
				    <div id="panel3b" class="content">
				      <?php echo get_field('team_member_3_bio'); ?>
				    </div>
				  </dd>
				  <dd class="accordion-navigation clear">
				    <a class="clear" href="#panel4b"><img src="<?php echo $team_member_4_image['url']; ?>" alt="<?php echo $team_member_4_image['alt']; ?>"><h6><?php echo get_field('team_member_4'); ?></h6><p><?php echo get_field('team_member_4_title'); ?></p></a>
				    <div id="panel4b" class="content">
				      <?php echo get_field('team_member_4_bio'); ?>
				    </div>
				  </dd>
				</dl>
			</div>
			<aside class="events red-tertiary small-12 medium-4 column no-padding" data-equalizer-watch>
				<h4 class="red-secondary">Events we&rsquo;re attending</h4>
				<?php
					$evnet1_url = get_field('event1_link');
					$evnet2_url = get_field('event2_link');
					$evnet3_url = get_field('event3_link');
					$evnet4_url = get_field('event4_link');
					$evnet5_url = get_field('event5_link');
				?>
				<ul>
					<li><a href='<?php echo $evnet1_url;?>' target="_blank"><?php echo get_field('event1'); ?></a></li>
					<li><a href="<?php echo $evnet2_url;?>" target="_blank"><?php echo get_field('event2'); ?></a></li>
					<li><a href="<?php echo $evnet3_url;?>" target="_blank"><?php echo get_field('event3'); ?></a></li>
					<li><a href="<?php echo $evnet4_url;?>" target="_blank"><?php echo get_field('event4'); ?></a></li>
					<li><a href="<?php echo $evnet5_url;?>" target="_blank"><?php echo get_field('event5'); ?></a></li>
					<li><a href="<?php echo $evnet6_url;?>" target="_blank"><?php echo get_field('event6'); ?></a></li>
				</ul>
				<a class="brown-text meetModal" href="#">schedule an in-person meeting</a>
			</aside>
		</main><!-- #main -->
		<section id="franchise-quotes" class="light-brown-bg">
			<h3 class="white-text">A Word from our Franchisees</h3>
			<div class="franchise slider">
				<div class="slide">
					<blockquote>&ldquo;I came to Smashburger after 36 years of experience in the food industry, overseeing 5,200 McDonalds locations. My partner and I were looking for a brand with great food and enormous growth potential. Smashburger&rsquo;s brand buzz is incredible &ndash; everyone who knows the brand is excited about the brand. We look forward to building Smashburger restaurants to leave behind for our children so that they can become the next generation of entrepreneurs.&rdquo;</blockquote>
					<h5>Wes Broomfield</h5>
					<p>Franchise Owner - Orlando and Jacksonville Markets</p>
				</div>
				<div class="slide">
					<blockquote>&ldquo;I came to Smashburger after 36 years of experience in the food industry, overseeing 5,200 McDonalds locations. My partner and I were looking for a brand with great food and enormous growth potential. Smashburger&rsquo;s brand buzz is incredible &ndash; everyone who knows the brand is excited about the brand. We look forward to building Smashburger restaurants to leave behind for our children so that they can become the next generation of entrepreneurs.&rdquo;</blockquote>
					<h5>Wes Broomfield</h5>
					<p>Franchise Owner - Orlando and Jacksonville Markets</p>
				</div>
				<div class="slide">
					<blockquote>&ldquo;I came to Smashburger after 36 years of experience in the food industry, overseeing 5,200 McDonalds locations. My partner and I were looking for a brand with great food and enormous growth potential. Smashburger&rsquo;s brand buzz is incredible &ndash; everyone who knows the brand is excited about the brand. We look forward to building Smashburger restaurants to leave behind for our children so that they can become the next generation of entrepreneurs.&rdquo;</blockquote>
					<h5>Wes Broomfield</h5>
					<p>Franchise Owner - Orlando and Jacksonville Markets</p>
				</div>
			</div>
			<div class="red-secondary center-padding">
				<a class="redtext-secondary light-tan-bg"  href="<?php echo site_url();?>/franchising/inquire-within/">submit an inquiry</a>
			</div>
		</section>

	</div><!-- #primary -->
	<div id="meetModal">
		<div class="small-12 dark-overlay small-padding">
			<div class="small-12 medium-10 row light-tan-bg modal">
				<h5>Schedule an in-person meeting<span>X</span></h5>
				<form id="event" action="" onSubmit="return validateEmail(this.EmailAddress.value);">
					<input type="text" name="fname" value="First Name" required>
					<input type="text" name="lname" value="Last Name" required>
					<input type="text" name="event" value="Event you're attending">
					<input type="text" name="EmailAddress" value="Email" id="EmailAddress" required>
					<input type="text" name="phone" value="Phone">
					<textarea rows="4" col="50" value="Message" form="event">Message</textarea>
					<input type="submit">
				</form>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
<script type="text/javascript">
	$('a.meetModal').click(function() {
		$('#meetModal').fadeIn(250);
	});
	$('#meetModal span').click(function() {
		$('#meetModal').fadeOut(250);
	});
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