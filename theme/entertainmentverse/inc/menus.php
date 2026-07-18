<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function entertainmentverse_register_menus() {

	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu',
		)
	);

}

add_action( 'after_setup_theme', 'entertainmentverse_register_menus' );