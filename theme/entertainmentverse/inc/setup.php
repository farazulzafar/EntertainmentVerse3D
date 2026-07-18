<?php
/**
 * Theme Setup
 *
 * @package EntertainmentVerse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function entertainmentverse_setup() {

	load_theme_textdomain( 'entertainmentverse' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );

	add_theme_support( 'wp-block-styles' );

}

add_action( 'after_setup_theme', 'entertainmentverse_setup' );