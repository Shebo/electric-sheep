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
				<div class="category-carousel-wrapper active" data-category="sports">
					<div class="category-carousel">
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Sports Videos</a>
				</div>

				<div class="category-carousel-wrapper" data-category="fashion">
					<div class="category-carousel">
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Fashion Videos</a>
				</div>

				<div class="category-carousel-wrapper" data-category="travel">
					<div class="category-carousel">
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Travel Videos</a>
				</div>

				<div class="category-carousel-wrapper" data-category="pets">
					<div class="category-carousel">
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
						<div class="category-video">
							<div class="category-video-inner">
								<div class="overlay"></div>
								<div class="metadata text-left">
									<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
									<span class="Open-Sans">Time: 04:24</span>
									<span class="Open-Sans">by: Alex Furman</span>
								</div>
								<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
								  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
					<a href="#" class="Maven-Pro view-videos">View All Pets Videos</a>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
