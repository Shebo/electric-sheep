<?php


/**
 * Enqueue scripts and styles.
 */
function enqueue_scripts() {

	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
    wp_enqueue_script('scripts'); // Enqueue it!

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

