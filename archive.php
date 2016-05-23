<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Electric_Sheep
 */

get_header(); ?>

<style type="text/css">
	.categories-nav li.menu-category-sports {
		background-image: url(<?php echo 'https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg';?>);
	}

	.categories-nav li.menu-category-fashion {
		background-image: url(<?php echo 'https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg';?>);
	}

	.categories-nav li.menu-category-travel {
		background-image: url(<?php echo 'https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg';?>);
	}

	.categories-nav li.menu-category-pets {
		background-image: url(<?php echo 'https://i.ytimg.com/vi/Q8AZ16uBhr8/maxresdefault.jpg';?>);
	}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="categories-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'DIN text-uppercase' ) ); ?>
		</div>
		<?php get_template_part('category', 'carousel');?>
		<?php get_template_part('category', 'top');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
