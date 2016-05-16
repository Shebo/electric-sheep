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
		<main id="main" role="main">
			<?php get_template_part('curtains'); ?>
			<div class="categories-carousel">
				<div class="category-carousel-wrapper category-sports-carousel-wrapper">
					<div class="category-carousel">
						<div class="category-video-wrapper">

						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Sports Videos</a>
				</div>

				<div class="category-carousel-wrapper category-fashion-carousel-wrapper">
					<div class="category-carousel">
						<div class="category-video-wrapper">

						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Fashion Videos</a>
				</div>

				<div class="category-carousel-wrapper category-travel-carousel-wrapper">
					<div class="category-carousel">
						<div class="category-video-wrapper">

						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Travel Videos</a>
				</div>

				<div class="category-carousel-wrapper category-pets-carousel-wrapper">
					<div class="category-carousel">
						<div class="category-video-wrapper">

						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Pets Videos</a>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
