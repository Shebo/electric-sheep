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

<?php echo get_category_link( $category_id ); ?>
	<div class="content-area">
		<main id="main" role="main">
			<?php get_template_part('curtains'); ?>
			<?php get_template_part('categories', 'carousel'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!--
<?php// if( have_rows('members', 'option') ): ?>

<ul>

<?php// while( have_rows('members', 'option') ): the_row(); ?>

    <li>

    <?php// the_sub_field('member_name'); ?>
    <?php// the_sub_field('member_title'); ?>
    <?php// the_sub_field('member_image'); ?>
    <?php// the_sub_field('member_text'); ?>



    </li>

<?php// endwhile; ?>

</ul>

<?php// endif; ?> -->




<?php


/*$tops = return_tops_array('acf-options-sports');


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

}*/
?>
<?php //$field = get_field($field_name, $post_id, $format_value); ?>


<?php
get_footer();
