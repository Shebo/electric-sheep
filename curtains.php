<div class="site-main homepage-curtains-wrapper" data-toggle="open">
	<div class="homepage-center">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/big-logo.png">
		<p class="Maven-Pro text-center"><?php the_field('hp_text', 'option'); ?></p>
	</div>
	<div class="homepage-curtains">
		<div class="curtain-wrapper active" data-category="sports">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Sports</h3>
					<a href="#" class="Maven-Pro view-videos">View All Sports Videos</a>
				</div>
			</div>
			<video autoplay loop muted poster="<?php the_field('slide_1_gif', 'option'); ?>">
			  <source src="<?php the_field('slide_1_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="fashion">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Fashion</h3>
					<a href="#" class="Maven-Pro view-videos">View All Fashion Videos</a>
				</div>
			</div>
			<video autoplay loop muted poster="<?php the_field('slide_2_gif', 'option'); ?>">
			  <source src="<?php the_field('slide_2_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="travel">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Travel</h3>
					<a href="#" class="Maven-Pro view-videos">View All Travel Videos</a>
				</div>
			</div>
			<video autoplay loop muted poster="<?php the_field('slide_3_gif', 'option'); ?>">
			  <source src="<?php the_field('slide_3_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
		<div class="curtain-wrapper" data-category="pets">
			<div class="curtain-overlay">
				<div class="shadow"></div>
				<div class="content">
					<h3 class="DIN text-uppercase"><span></span>Pets</h3>
					<a href="#" class="Maven-Pro view-videos">View All Pets Videos</a>
				</div>
			</div>
			<video autoplay loop muted poster="<?php the_field('slide_4_gif', 'option'); ?>">
			  <source src="<?php the_field('slide_4_video', 'option'); ?>" type="video/mp4">
			</video>
		</div>
	</div>
</div>