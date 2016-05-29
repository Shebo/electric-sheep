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
					<div class="image-header text-center col-sm-12" style="background-image: url(http://www.abstract-living.com/wp-content/uploads/2015/05/meeting-strangers.jpg);">
						<h1 class="Maven-Pro text-uppercase text-center">About Us</h1>
						<p class="Maven-Pro text-center"><?php the_field('about_us_text', 'option'); ?></p>
						<a class="Maven-Pro text-uppercase text-center" href="">Learn More</a>
					</div>
					<div class="partners clearfix">
						<h2 class="col-sm-12 Maven-Pro text-uppercase text-center">Our Partners</h2>
						<div class="col-sm-5 col-sm-push-1">
							<div class="content-contributors">
								<h3 class="Maven-Pro text-uppercase text-center">content contributors</h3>


								<?php //if( have_rows('content_contributors', 'option') ): ?>

								    <?php //while( have_rows('content_contributors', 'option') ): the_row(); ?>

								        <!-- <div class="contributor pull-left"> -->
											<!-- <a href="<?php //the_sub_field('partner_logo_url'); ?>" target="_blank"><img src="<?php //the_sub_field('partner_logo'); ?>?format=300w"></a> -->
										<!-- </div> -->

								    <?php //endwhile; ?>

								<?php //endif; ?>
								<div class="contributors-carousel">
									<div class="contributors-slide">
										<div class="contributor pull-left">
											<img src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="contributor pull-left">
											<img src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
									</div>
									<div class="contributors-slide">
										<div class="contributor pull-left">
											<img src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="contributor pull-left">
											<img src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
									</div>
									<div class="contributors-slide">
										<div class="contributor pull-left">
											<img src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="contributor pull-left">
											<img src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
									</div>
									<div class="contributors-slide">
										<div class="contributor pull-left">
											<img src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="contributor pull-left">
											<img src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="contributor pull-right">
											<img class="pull-right" src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-sm-5 col-sm-push-1">
							<div class="demand-partners pull-right">
								<h3 class="Maven-Pro text-uppercase text-center">demand partners</h3>
								<div class="partners-carousel">
									<div class="partners-slide">
										<div class="partner pull-left">
											<img src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="partner pull-left">
											<img src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://static1.squarespace.com/static/54b46852e4b0994bbbd1a225/54d3bf7be4b0ef0f3e47f45c/54e60d25e4b0614713bf2e76/1426790266915/Cnn-logo.png?format=300w">
										</div>
									</div>
									<div class="partners-slide">
										<div class="partner pull-left">
											<img src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="partner pull-left">
											<img src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="https://media-mediatemple.netdna-ssl.com/wp-content/uploads/images/logo-design-principles/timeless-logos.jpg">
										</div>
									</div>
									<div class="partners-slide">
										<div class="partner pull-left">
											<img src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="partner pull-left">
											<img src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://vignette4.wikia.nocookie.net/smurfs/images/a/a1/Netflix-logo.png/revision/latest?cb=20150508223333">
										</div>
									</div>
									<div class="partners-slide">
										<div class="partner pull-left">
											<img src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="partner pull-left">
											<img src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
										<div class="partner pull-right">
											<img class="pull-right" src="http://www.reviewstl.com/wp-content/uploads/2014/07/Marvel-Logo-Small.jpg">
										</div>
									</div>
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
					<div class="news no-gutter clearfix">
						<h2 class="col-sm-12 Maven-Pro text-uppercase text-center">News & Press</h2>
						<div class="text-center col-sm-4">
							<h4 class="Maven-Pro text-uppercase text-center">our team won!</h4>
							<p class="Maven-Pro text-center">We’re discovering, curating, promoting, and distributing a diverse selection of programming.</p>
							<a class="Maven-Pro text-uppercase text-center" href="">Learn More</a>
						</div>
						<div class="text-center col-sm-4">
							<h4 class="Maven-Pro text-uppercase text-center">our team won!</h4>
							<p class="Maven-Pro text-center">We’re discovering, curating, promoting, and distributing a diverse selection of programming.</p>
							<a class="Maven-Pro text-uppercase text-center" href="">Learn More</a>
						</div>
						<div class="text-center col-sm-4">
							<h4 class="Maven-Pro text-uppercase text-center">our team won!</h4>
							<p class="Maven-Pro text-center">We’re discovering, curating, promoting, and distributing a diverse selection of programming.</p>
							<a class="Maven-Pro text-uppercase text-center" href="">Learn More</a>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
