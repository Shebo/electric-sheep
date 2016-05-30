<?php
/**
 * Template Name: Contact Us
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Electric_Sheep
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
			<div class="contact-us-wrapper">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/white-logo.png">
				<h1 class="DIN text-uppercase">Contact Us</h1>
				<div class="social-icons hidden-xs">
					<ul class="clearfix">
						<li class="google-plus">
							<a href="<?php the_field('facebook_url', 'option'); ?>" title="Google Plus" alt="Google Plus"></a>
						</li>
						<li class="facebook">
							<a href="<?php the_field('google_url', 'option'); ?>" title="Facebook" alt="Facebook"></a>
						</li>
						<li class="twitter">
							<a href="<?php the_field('twitter_url', 'option'); ?>" title="Twitter" alt="Twitter"></a>
						</li>
						<li class="linkedin">
							<a href="<?php the_field('linkedin_url', 'option'); ?>" title="Linkedin" alt="Linkedin"></a>
						</li>
					</ul>
				</div>
				<div class="content DIN text-uppercase">
					<p>FOR SALES INQUIRIES OR BUSINESS<br/>OPPORTUNITIES FEEL FREE TO<br/>DROP US A LINE</p>
				</div>
				<div class="address DIN text-uppercase">
					<p>ESheep, 14 Rothschild avenue, Tel Aviv Israel</p>
					<p>Tel: 1-844-842-0383</p>
				</div>
				<div class="footer clearfix">
					<div class="email">
						<a class="DIN text-uppercase" href="mailto:esheep@gmail.com">esheep@gmail.com</a>
					</div>
					<div class="social-icons visible-xs">
						<ul class="clearfix">
							<li class="google-plus">
								<a href="<?php the_field('facebook_url', 'option'); ?>" title="Google Plus" alt="Google Plus"></a>
							</li>
							<li class="facebook">
								<a href="<?php the_field('google_url', 'option'); ?>" title="Facebook" alt="Facebook"></a>
							</li>
							<li class="twitter">
								<a href="<?php the_field('twitter_url', 'option'); ?>" title="Twitter" alt="Twitter"></a>
							</li>
							<li class="linkedin">
								<a href="<?php the_field('linkedin_url', 'option'); ?>" title="Linkedin" alt="Linkedin"></a>
							</li>
						</ul>
					</div>
					<div class="mini-menu">
						<ul>
							<li><a class="DIN text-uppercase" href="">Privacy</a></li>
							<li><a class="DIN text-uppercase" href="">TOS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
