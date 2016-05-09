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
		<main id="main" class="site-main homepage-video-main-carousel" role="main">

			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_footer();
