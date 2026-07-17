<?php
/**
 * Theme Functions
 *
 * @package EntertainmentVerse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function entertainmentverse_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'menus' );

}

add_action( 'after_setup_theme', 'entertainmentverse_setup' );