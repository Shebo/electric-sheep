<?php


/**
 * Enqueue scripts and styles.
 */
function enqueue_scripts() {

	wp_enqueue_style( 'videojs-style', 'http://vjs.zencdn.net/5.9.2/video-js.css' );

	// wp_enqueue_style( 'videojs-theme', get_template_directory_uri() . '/sass/libs/videojs-sublime-skin.min.css' );

	wp_register_script('videojs', 'http://vjs.zencdn.net/5.9.2/video.js', array(), '5.9.2', true); // slick carousel
    wp_enqueue_script('videojs'); // Enqueue it!

    wp_register_script('slick', get_template_directory_uri() . '/js/libs/slick.js', array('jquery'), '1.0.0'); // slick carousel
    wp_enqueue_script('slick'); // Enqueue it!

    wp_register_script('owl.carousel', get_template_directory_uri() . '/js/libs/owl.carousel.js', array('jquery'), '1.0.0'); // owl carousel
    wp_enqueue_script('owl.carousel'); // Enqueue it!

    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('scripts'); // Enqueue it!

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts', 9 );

add_filter('show_admin_bar', '__return_false');

