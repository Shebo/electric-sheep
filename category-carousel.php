<?php
if(is_front_page() || is_home()){
	$categories = array('sports', 'fashion', 'travel', 'pets');
}else{

	$categories = array(single_cat_title('',false));
}
?>

<?php foreach ($categories as $cat_name) :

$options_group = 'acf-options-'.$cat_name;
$tops = return_tops_array($options_group);
$thegroup = acf_get_fields($tops[0]->post_name);
$counter = 0;


?>
	<div class="category-carousel-wrapper <?php if($categories[0] == $cat_name){echo 'active';} ?>" data-category="<?php echo strtolower($cat_name); ?>">
		<h1 class="DIN text-uppercase visible-xs"><?php echo $cat_name; ?></h1>
		<div class="category-carousel">



<?php
			foreach ( $thegroup as $group ) {
			$postID = get_option( 'options_'.$group['name'] );

			$video_title = get_the_title($postID);
			$video_img = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'full');
			$video_url = get_post_meta($postID,'video_url',true);
			$category_id = get_cat_ID( $cat_name ) ;
			$counter++;
			?>



			<div class="category-video">
				<div class="category-video-inner">
					<div class="overlay"></div>
					<span class="banner top-engaged DIN text-uppercase hidden-xs">
						<i></i>
						<?php echo get_the_title($group['parent']);?>
					</span>
					<div class="metadata text-left">
						<h3 class="Maven-Pro text-uppercase">
							<span>#<?php echo $counter; ?></span>
							<?php echo $video_title; ?>
						</h3>
						<!--<span class="Open-Sans">Time: 04:24</span>
						<span class="Open-Sans">by: Alex Furman</span>-->
					</div>
					<video class="video-js vjs-sublime-skin" controls preload="none" data-setup='{"poster":"<?php echo $video_img[0]; ?>"}'>
					  <source src="<?php echo $video_url; ?>" type="video/mp4">
					</video>
				</div>
			</div>


<?php } ?>


		</div>
		<?php if(is_category()):?>
		<a href="#" class="scroll-for-more Maven-Pro text-lowercase hidden-xs">Scroll For More</a>
		<?php else:?>
		<?php



		$cat_link = get_category_link( $category_id ); ?>
		<a href="<?php echo $cat_link; ?>?from=hp" class="view-videos Maven-Pro text-lowercase">View All <?php echo $cat_name; ?> Videos</a>
		<?php endif; ?>
	</div>
<?php endforeach;?>