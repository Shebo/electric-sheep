<?php

$cat_name = single_cat_title('',false);

$options_group = 'acf-options-'.$cat_name;
$tops = return_tops_array($options_group);
//$thegroup = acf_get_fields($tops[0]->post_name);


$output_tops = array_slice($tops, 1);



?>

<div class="category-tops container-fluid">
<?php foreach ($output_tops as $the_top) : //loop through 2,3,4 tops?>
	<div class="category-top row">

		<?php $thegroup = acf_get_fields($the_top->post_name); ?>
		<h4 class="DIN text-uppercase text-center"><?php echo get_the_title($thegroup[0]['parent']); ?></h4>

		<?php foreach ( $thegroup as $group ) {

    		$postID = get_option( 'options_'.$group['name'] );

			$video_title = get_the_title($postID);
		$video_img = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'full');
			$video_url = get_post_meta($postID,'video_url',true);
			$video_source_text = get_post_meta($postID,'video_source_text',true);
			$video_source_url = get_post_meta($postID,'video_source_url',true);

		 ?>
			<div class="video col-sm-4">
				<div class="category-video-inner">
					<div class="metadata text-left">
						<div class="inner-metadata">
							<h3 class="Maven-Pro text-uppercase"><?php echo $video_title; ?></h3>
							<a href="<?php echo $video_source_url; ?>" class="Maven-Pro"><?php echo $video_source_text; ?></a>
						</div>
					</div>
					<video class="video-js vjs-sublime-skin" controls data-setup='{"poster":"<?php echo $video_img[0]; ?>", "preload": false}'>
					  <source src="<?php echo $video_url; ?>" type="video/mp4">
					</video>
				</div>
			</div>
		<?php } ?>



	</div>
<?php endforeach;?>
</div>
