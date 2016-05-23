<?php
if(is_front_page() || is_home()){
	$categories = array('sports', 'fashion', 'travel', 'pets');
}else{
	$categories = array('sports');
}
?>

<?php foreach ($categories as $cat_name) : ?>
	<div class="category-carousel-wrapper <?php if($categories[0] == $cat_name){echo 'active';} ?>" data-category="<?php echo $cat_name; ?>">
		<div class="category-carousel">
			<div class="category-video">
				<div class="category-video-inner">
					<div class="overlay"></div>
					<span class="banner top-engaged DIN text-uppercase">
						<i></i>
						Top Engaged By Users
					</span>
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
					<span class="banner top-engaged DIN text-uppercase">
						<i></i>
						Top Engaged By Users
					</span>
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
					<span class="banner top-engaged DIN text-uppercase">
						<i></i>
						Top Engaged By Users
					</span>
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
		<?php if(is_category()):?>
		<a href="#" class="scroll-for-more Maven-Pro text-lowercase">Scroll For More</a>
		<?php else:?>
		<a href="#?from=hp" class="view-videos Maven-Pro text-lowercase">View All <?php echo $cat_name; ?> Videos</a>
		<?php endif; ?>
	</div>
<?php endforeach;?>