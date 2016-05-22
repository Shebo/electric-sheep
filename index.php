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
		<main id="main" class="site-main homepage-video-main-carousel" role="main">

			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="video-wrapper">
				<div class="video-overlay">
					<div class="shadow"></div>
					<h3><span></span>Sport</h3>

				</div>
				<video controls autoplay loop muted>
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SampleVideo.mp4" type="video/mp4">
				</video>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
    
    
<?php if( have_rows('members', 'option') ): ?>

    <ul>

    <?php while( have_rows('members', 'option') ): the_row(); ?>

        <li>
        
        <?php the_sub_field('member_name'); ?>
        <?php the_sub_field('member_title'); ?>
        <?php the_sub_field('member_image'); ?>
        <?php the_sub_field('member_text'); ?>
        
        
        
        </li>

    <?php endwhile; ?>

    </ul>

<?php endif; ?>




<?php


$tops = return_tops_array('acf-options-sports');


foreach ( $tops as $top) 
{

    
    $thegroup = acf_get_fields($top->post_name);
    
    
    
    foreach ( $thegroup as $group ) 
    {
    echo '<br /><br />';
    echo $group['ID'];
    echo '||';
    echo $group['key'];
    echo '||';
    
    //the_field($field_name, $post_id);
    //the_field('options_top_1_most_like_sports', $group['ID']);
    
    
    
    echo get_option( 'options_'.$group['name'] );

    
    echo '<br /><br />';
    
         
    }

}
?>
<?php //$field = get_field($field_name, $post_id, $format_value); ?>


<?php
//get_footer();
