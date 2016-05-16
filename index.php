<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Electric_Sheep
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main homepage-curtains" data-toggle="open" role="main">

			<div class="sports-curtain-wrapper curtain-wrapper">
				<div class="curtain-overlay">
					<div class="shadow"></div>
					<div class="content">
						<h3 class="DIN text-uppercase"><span></span>Sport</h3>
						<a href="#" class="Maven-Pro view-videos">View All Sport Videos</a>
					</div>

				</div>
				<video autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="fashion-curtain-wrapper curtain-wrapper">
				<div class="curtain-overlay">
					<div class="shadow"></div>
					<div class="content">
						<h3 class="DIN text-uppercase"><span></span>Fashion</h3>
						<a href="#" class="Maven-Pro view-videos">View All Fashion Videos</a>
					</div>

				</div>
				<video autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="travel-curtain-wrapper curtain-wrapper">
				<div class="curtain-overlay">
					<div class="shadow"></div>
					<div class="content">
						<h3 class="DIN text-uppercase"><span></span>Travel</h3>
						<a href="#" class="Maven-Pro view-videos">View All Travel Videos</a>
					</div>

				</div>
				<video autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="pets-curtain-wrapper curtain-wrapper">
				<div class="curtain-overlay">
					<div class="shadow"></div>
					<div class="content">
						<h3 class="DIN text-uppercase"><span></span>Pets</h3>
						<a href="#" class="Maven-Pro view-videos">View All Pets Videos</a>
					</div>

				</div>
				<video autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
