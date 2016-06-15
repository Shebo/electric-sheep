<?php
/**
 * Electric Sheep functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Electric_Sheep
 */

if ( ! function_exists( 'electric_sheep_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function electric_sheep_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Electric Sheep, use a find and replace
	 * to change 'electric-sheep' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'electric-sheep', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'electric-sheep' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'electric_sheep_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'electric_sheep_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function electric_sheep_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'electric_sheep_content_width', 640 );
}
add_action( 'after_setup_theme', 'electric_sheep_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electric_sheep_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'electric-sheep' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'electric-sheep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'electric_sheep_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function electric_sheep_scripts() {
	wp_enqueue_style( 'electric-sheep-style', get_stylesheet_uri() );

	wp_enqueue_script( 'electric-sheep-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'electric-sheep-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'electric_sheep_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/boaz-functions.php';

/**
 * Add Redux Framework & extras
 */
//require get_template_directory() . '/admin/admin-init.php';

// Check whether the Titan Framework plugin is activated, and notify if it isn't
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sports Settings',
		'menu_title'	=> 'Sports',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Fashion Settings',
		'menu_title'	=> 'Fashion',
		'parent_slug'	=> 'theme-general-settings',
	));
	
    
   	acf_add_options_sub_page(array(
		'page_title' 	=> 'Travel Settings',
		'menu_title'	=> 'Travel',
		'parent_slug'	=> 'theme-general-settings',
	));
    
   	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pets Settings',
		'menu_title'	=> 'Pets',
		'parent_slug'	=> 'theme-general-settings',
	));
    

   	acf_add_options_page(array(
		'page_title' 	=> 'About us Settings',
		'menu_title'	=> 'About us Settings',
		'menu_slug' 	=> 'about-us-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
    
    	acf_add_options_sub_page(array(
		'page_title' 	=> 'Partners Settings',
		'menu_title'	=> 'Partners',
		'parent_slug'	=> 'about-us-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Members Settings',
		'menu_title'	=> 'Members',
		'parent_slug'	=> 'about-us-settings',
	));
	
}


function return_tops_array($which_tops){
    global $post,$wpdb;

    $tops = $wpdb->get_results("SELECT post_name FROM $wpdb->posts WHERE CONVERT(`post_content` USING utf8) LIKE '%$which_tops%' order by menu_order");
                                
    return $tops;

    
}


/* add news post type */
add_action('init', 'news_register');

function news_register() {
  $labels = array(
    'name' => _x('News', 'post type general name'),
    'singular_name' => _x('News', 'post type singular name'),
    'add_new' => _x('Add News', ''),
    'add_new_item' => __('Add News'),
    'edit_item' => __('Edit News'),
    'new_item' => __('New News'),
    'view_item' => __('View News'),
    'search_items' => __('Search News'),
    'not_found' =>  __('No News'),
    'not_found_in_trash' => __('no trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'singular_label' => 'News',
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => array('slug'=>'news'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_icon' => '',
    'menu_position' => 4,
    'menu_position' => null,
    'supports' => array('title','thumbnail','editor','excerpt')
    
    
							
							
  ); 
  register_post_type('news',$args);
}

function add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-news div.wp-menu-image:before {
  content: "\f319";
}

</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );