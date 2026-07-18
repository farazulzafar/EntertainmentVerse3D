<?php
/**
 * Load CSS & JS
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function entertainmentverse_enqueue_assets() {

	wp_enqueue_style(
		'entertainmentverse-main',
		EV_THEME_URI . '/assets/css/main.css',
		array(),
		EV_THEME_VERSION
	);

	wp_enqueue_script(
		'entertainmentverse-main',
		EV_THEME_URI . '/assets/js/main.js',
		array(),
		EV_THEME_VERSION,
		true
	);

}

add_action( 'wp_enqueue_scripts', 'entertainmentverse_enqueue_assets' );