<?php
/**
 * Template Name: Update Profile
 *
 * @package smashburger
 */

get_header(); ?>
<?php
	$image1 = get_field('footer_image');
	$image2 = get_field('header_image');
 ?>
	<div class="header">
		<h1>Update my profile</h1>
	</div>
	<div id="primary" class="content-area">
		<main>
			<p class="brown-text small-12 row">Need to update your info? No problem.</p>
			<?php 
				$member = $_GET['Member'];
				if (isset($_GET['Member'])){
					echo '<iframe src="http://smashburger.fbmta.com/members/UpdateProfile.aspx?_Theme=45097156822&Member='.$member.'" width="960" height="800"></iframe>';
				} else {
					echo '<iframe src="http://smashburger.fbmta.com/login/login.aspx?ReturnURL=/members/UpdateProfile.aspx%3F_Theme%3D45097156822&_Theme=45097156823" width="960" height="800"></iframe>';
				}
			?>
			<div class="hide-for-small-only">
				<div class="medium-12">
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>