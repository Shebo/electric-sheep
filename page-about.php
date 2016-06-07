<?php
/**
 * Template Name: About Us
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
			<div class="about-us-wrapper container-fluid">
				<div class="row">
					<div class="image-header text-center col-sm-12" style="background-image: url(<?php the_field('about_us_top_image', 'option'); ?>);">
						<h1 class="Maven-Pro text-uppercase text-center">About Us</h1>
						<div class="Maven-Pro text-center">
							<p><?php the_field('about_us_text', 'option'); ?></p>
						</div>
						<a class="Maven-Pro text-uppercase text-center" href="">Learn More</a>
					</div>
					<div class="partners clearfix">
						<h2 class="col-sm-12 Maven-Pro text-uppercase text-center">Our Partners</h2>
						<div class="col-sm-5 col-sm-push-1">
							<div class="content-contributors">
								<h3 class="Maven-Pro text-uppercase text-center">content contributors</h3>
								<div class="contributors-carousel">
									<?php if( have_rows('content_contributors', 'option') ): ?>

									    <?php while( have_rows('content_contributors', 'option') ): the_row(); ?>

									        <div class="contributor">
												<img src="<?php the_sub_field('partner_logo'); ?>?format=300w">
											</div>

									    <?php endwhile; ?>

									<?php endif; ?>
								</div>

							</div>
						</div>
						<div class="col-sm-5 col-sm-push-1">
							<div class="demand-partners pull-right">
								<h3 class="Maven-Pro text-uppercase text-center">demand partners</h3>
								<div class="partners-carousel">
									
									<?php if( have_rows('demand_partners', 'option') ): ?>

									    <?php while( have_rows('demand_partners', 'option') ): the_row(); ?>

									        <div class="partner">
												<img src="<?php the_sub_field('partner_logo'); ?>?format=300w">
											</div>

									    <?php endwhile; ?>

									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="members no-gutter clearfix">
						<?php if( have_rows('members', 'option') ):
						$member_cnt = 1;
						?>



						    <?php while( have_rows('members', 'option') ): the_row();


						    if($member_cnt==1){ ?>
						    	<div class="col-sm-4">
									<div class="member big-member">
										<div class="inner-member" style="background-image: url(<?php the_sub_field('member_image'); ?>);">
											<div class="member-content">
												<h4 class="Maven-Pro text-uppercase"><?php the_sub_field('member_name'); ?></h4>
												<span class="role Maven-Pro text-uppercase"><?php the_sub_field('member_title'); ?></span>
												<p class="Maven-Pro"><?php the_sub_field('member_text'); ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-8 no-gutter">





						    <?php }else{ ?>

						    	<div class="col-sm-6">
								<div class="member small-member">
									<div class="inner-member" style="background-image: url(<?php the_sub_field('member_image'); ?>);">
										<div class="member-content">
											<h4 class="Maven-Pro text-uppercase"><?php the_sub_field('member_name'); ?></h4>
											<span class="role Maven-Pro text-uppercase"><?php the_sub_field('member_title'); ?></span>
										</div>
									</div>
								</div>
							</div>


						    <?php	} ?>


						    <?php
							$member_cnt++;
						    endwhile; ?>

						<?php endif; ?>



						</div>
					</div>
					<?php if(get_field('show_news', 'option') == 'yes'){ ?>
					<div class="news no-gutter clearfix">
						<h2 class="col-sm-12 Maven-Pro text-uppercase text-center">News & Press</h2>
						<div class="news-inner">
							<?php
								$args = array(
				                    'posts_per_page' => 3,
				                    'post_type' => 'news'
				                    
				                    );

								$updates = new WP_Query($args);
			                    if($updates->have_posts() ) : ?>
			                        <?php while( $updates->have_posts() ) : 
			                            $updates->the_post(); 
			                            global $post_id,$post;
							?>

							<div class="news-singular text-center col-sm-4">
								<h4 class="Maven-Pro text-uppercase text-center"><?php the_title();?></h4>
								<p class="Maven-Pro text-center"><?php the_excerpt();?></p>
								<a class="Maven-Pro text-uppercase text-center" href="<?php the_permalink();?>">Learn More</a>
							</div>

								<?php endwhile;?>
                    		<?php endif; ?> 


						</div>
					</div>
					<?php } ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
