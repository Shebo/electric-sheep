<div class="site-main homepage-curtains-wrapper" data-toggle="open">
	<div class="loader-background"></div>
	<div class="homepage-center hidden-xs">
		<div class="loader loading">
			<div class="inner-loader">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/loader.png" title="Loader" alt="Loader">
			</div>
		</div>
		<!-- <div class="loader-background"></div> -->
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-big.png">
		<p class="Maven-Pro text-center"><?php the_field('hp_text', 'option'); ?></p>
	</div>
	<div class="homepage-curtains">
		<div class="curtain-wrapper active" data-category="sports">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Sports</h3>
					<?php

					$category_id = get_cat_ID( 'sports' ) ;
					$cat_link = get_category_link( $category_id );


					?>
					<a href="<?php echo $cat_link; ?>" class="Maven-Pro view-videos">View All Sports Videos</a>
				</div>
			</div>
			<video id="curtain-video-1" class="video-js vjs-sublime-skin" preload="true" muted data-setup='{"poster":"<?php the_field('slide_1_gif', 'option'); ?>", "loop": true, "autoplay": true}'>
			  <source src="<?php the_field('slide_1_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="fashion">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Fashion</h3>
					<?php

					$category_id = get_cat_ID( 'fashion' ) ;
					$cat_link = get_category_link( $category_id );


					?>
					<a href="<?php echo $cat_link; ?>" class="Maven-Pro view-videos">View All Fashion Videos</a>
				</div>
			</div>
			<video id="curtain-video-2" class="video-js vjs-sublime-skin" preload="true" muted data-setup='{"poster":"<?php the_field('slide_2_gif', 'option'); ?>", "loop": true, "autoplay": true}'>
			  <source src="<?php the_field('slide_2_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="travel">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Travel</h3>
					<?php

					$category_id = get_cat_ID( 'travel' ) ;
					$cat_link = get_category_link( $category_id );


					?>
					<a href="<?php echo $cat_link; ?>" class="Maven-Pro view-videos">View All Travel Videos</a>
				</div>
			</div>
			<video id="curtain-video-3" class="video-js vjs-sublime-skin" preload="true" muted data-setup='{"poster":"<?php the_field('slide_3_gif', 'option'); ?>", "loop": true, "autoplay": true}'>
			  <source src="<?php the_field('slide_3_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="pets">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Pets</h3>
					<?php

					$category_id = get_cat_ID( 'pets' ) ;
					$cat_link = get_category_link( $category_id );


					?>
					<a href="<?php echo $cat_link; ?>" class="Maven-Pro view-videos">View All Pets Videos</a>
				</div>
			</div>
			<video id="curtain-video-4" class="video-js vjs-sublime-skin" preload="true" muted data-setup='{"poster":"<?php the_field('slide_4_gif', 'option'); ?>", "loop": true, "autoplay": true}'>
			  <source src="<?php the_field('slide_4_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
	</div>
</div>