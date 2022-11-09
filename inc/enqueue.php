<?php
/**
 * Handing enqueueing scripts and styles to be loaded into Candy Shop
 *
 * @package candyshop
 */

/**
 * Main enqueue handler for front-end of the site
 */
function enqueue_scripts_styles() {

	// Enqueue styles
	wp_enqueue_style( 'cs_style', get_stylesheet_directory_uri() . '/css/main.css', array(), filemtime( get_stylesheet_directory() . '/css/main.css' ) );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles', 99 );

