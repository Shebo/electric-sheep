<?php
$tops = array('most liked by publishers', 'top engaged by users', 'our top recommendations');
?>

<div class="category-tops container-fluid">
<?php foreach ($tops as $top_name) : ?>
	<div class="category-top row">
		<h4 class="DIN text-uppercase text-center"><?php echo $top_name; ?></h4>
		<div class="video col-md-4">
			<div class="category-video-inner">
				<div class="metadata text-left">
					<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
					<a href="#" class="Maven-Pro">XYZ.COM</a>
				</div>
				<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
		</div>
		<div class="video col-md-4">
			<div class="category-video-inner">
				<div class="metadata text-left">
					<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
					<a href="#" class="Maven-Pro">XYZ.COM</a>
				</div>
				<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
		</div>
		<div class="video col-md-4">
			<div class="category-video-inner">
				<div class="metadata text-left">
					<h3 class="Maven-Pro text-uppercase">Punk Rock Is A Thing</h3>
					<a href="#" class="Maven-Pro">XYZ.COM</a>
				</div>
				<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg", "preload": false}'>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
<?php endforeach;?>
</div>
