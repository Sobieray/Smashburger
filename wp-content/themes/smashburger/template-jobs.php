<?php
/**
 * Template Name: Jobs
 *
 * @package smashburger
 */

get_header(); ?>
	<div class="header">
		<h1 class="redtext-primary">Jobs</h1>
	</div>
	<div id="primary" class="content-area">
		<main id="jobs" class="site-main clear" role="main">
			<div class="small-12 medium-8 large-5 column chevron">
				<h2 class="tan-text">We Want You!</h2>
				<p class="tan-text">Smashburger is currently searching for enthusiastic, energetic people to join our team. We offer a competitive hourly rate plus the opportunity for bonuses at certain levels and a strong commitment to promoting from within.</p>
			</div>
		</main><!-- #main -->
		<section id="job-types">
			<div class="row" data-equalizer>
				<div class="small-12 medium-6 column small-padding red-secondary" data-equalizer-watch>
					<p class="white-text">Work for one of America’s most promising companies named by Forbes in 2014</p>
				</div>
				<div class="small-12 medium-6 column tan-bg small-padding apply" data-equalizer-watch>
					<a href="#job-openings" class="red-secondary secondary-btn">Apply Now</a>
				</div>
			</div>
			<div class="row" data-equalizer>
				<div class="small-12 medium-6 column tan-bg no-padding" data-equalizer-watch>
					<div class="small-6 column no-padding">
						<img src="<?php echo get_template_directory_uri() . '/img/jobs_employee.jpg' ?>" alt="smashburger employee photo">
					</div>
					<div class="small-6 column center-padding">
						<img src="<?php echo get_template_directory_uri() . '/img/rocket_icon.svg' ?>" alt="smashburger rocket ship">
					</div>
				</div>
				<div class="small-12 medium-6 column dark-blue-bg small-padding " data-equalizer-watch>
					<p class="white-text">shooting for the stars?</br>we&rsquo;ve got a rocketship</p>
				</div>
			</div>
			<div class="row flex">
				<div class="small-12 medium-6 column tan-bg grow">
					<h3 class="brown-text">Grow with us</h3>
					<p class="brown-text">Once individuals choose to join us they have the option to grow through our internal development program, &ldquo;TRiP&rdquo;.  TRiP reflects our core leadership competencies of Thought, Results, Influence, and Personal Leadership. TRiP guides Smashburger internal leaders in learning and practicing those key leadership competencies. It&rsquo;s designed to help you explore and develop these leadership skills while also learning Smashburger procedures, standards and routines.</p>
				</div>
				<div class="small-12 medium-6 column no-padding">
					<div class="row flex">
						<div class="hide-for-small-only medium-6 column red-secondary center-padding fresh">
							<img src="<?php echo get_template_directory_uri() . '/img/fresh_icon2.svg' ?>">
						</div>
						<div class="small-12 medium-6 column no-padding">
							<img src="<?php echo get_template_directory_uri() . '/img/jobs_interior.jpg' ?>" alt="smashburger interior photo">
						</div>
					</div>
					<div class="row flex">
						<div class="hide-for-small-only medium-6 column no-padding">
							<img src="<?php echo get_template_directory_uri() . '/img/jobs_lifestyle.jpg' ?>" alt="smashburger lifestyle photo">
						</div>
						<div class="hide-for-small-only medium-6 column center-padding brown drink">
							<img src="<?php echo get_template_directory_uri() . '/img/drink_icon.jpg' ?>" alt="smashburger drink icon">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
		<section class=" hide-for-small-only testimonials red-secondary">
			<h3 class="white-text">Employee Testimonials</h3>
			<div class="jobs slider small-10 row">
				<div class="slide">
					<p>&ldquo;I love the people at Smashburger including my mentors. I have had many along the way that have devoted so much of their time to make sure that I was successful. The passion my peers and mentors show me is refreshing and it feels like a family.&rdquo;</p>
				</div>
				<div class="slide">
					<p>&ldquo;Smashburger has helped me motivate myself to live and love myself as a manager. They have given me a chance to have a career with the company and help others live and love the company.&rdquo;</p>
				</div>
				<div class="slide">
					<p>&ldquo;Smashburger really cares about its employees and building them up to a higher standard.&rdquo;</p>
				</div>
				<div class="slide">
					<p>&ldquo;Everyone at Smashburger does what they have to do to make the food and dining experience special for everyone that comes through our doors. Smashburger has taught me that patience is key; work hard and you will succeed; and you will be recognized for you efforts.&rdquo;</p>
				</div>
				<div class="slide">
					<p>&ldquo;I enjoy all the different people and interactions that I encounter at Smashburger and I love the team work. I also love the adrenaline rush of being busy and watching everybody do their part.&rdquo;</p>
				</div>
				<div class="slide">
					<p>&ldquo;Smashburger is the first company that I have worked for that has shown recognition when I work hard. It is a friendly place to work with a lot of fun people on staff.&rdquo;</p>
				</div>
			</div>
		</section>

	<section id="job-openings">
		<?php 
			$hourly_link1 = get_field('job_title1_link');
			$hourly_link2 = get_field('job_title2_link');
			$hourly_link3 = get_field('job_title3_link');
			$manager_link1 = get_field('manager_title1_link');
			$manager_link2 = get_field('manager_title2_link');
			$corporate_link1 = get_field('corporate_title1_link');
			$corporate_link2 = get_field('corporate_title2_link');
			$corportae_link3 = get_field('corporate_title3_link');
		?>
		<h2>Job Openings</h2>
		<div id="hourly">
			<h3>Restaurant Hourly</h3>
			<ul>
				<li class="clear"><p><?php echo get_field('job_title1'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $hourly_link1 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('job_title2'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $hourly_link2 ?>">Apply Now</a></li>
			</ul>
		</div>
			<div id="managment">
			<h3>Management</h3>
			<ul>
				<li class="clear"><p><?php echo get_field('manager_title1'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $manager_link1 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('manager_title2'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $manager_link2 ?>">Apply Now</a></li>
				<!-- <li class="clear"><p><?php echo get_field('manager_title3'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $hourly_link3 ?>">Apply Now</a></li> -->
			</ul>
		</div>
			<div id="corporate">
			<h3>Corporate Office</h3>
			<ul>
				<li class="clear"><p><?php echo get_field('corporate_title1'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link1 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title2'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link2 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title3'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link3 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title4'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link4 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title5'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link5 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title6'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link6 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title7'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link7 ?>">Apply Now</a></li>
				<li class="clear"><p><?php echo get_field('corporate_title8'); ?></p><a class="secondary-btn red-secondary" href="<?php echo $corporate_link8 ?>">Apply Now</a></li>
			</ul>
		</div>
	</section>
<?php get_footer('custom'); ?>
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
