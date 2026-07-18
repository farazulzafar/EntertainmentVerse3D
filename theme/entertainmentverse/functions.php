<?php
/**
 * EntertainmentVerse Theme Bootstrap
 *
 * @package EntertainmentVerse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EV_THEME_VERSION', '1.0.0' );
define( 'EV_THEME_PATH', get_template_directory() );
define( 'EV_THEME_URI', get_template_directory_uri() );

/**
 * Load Theme Files
 */

require_once EV_THEME_PATH . '/inc/setup.php';
require_once EV_THEME_PATH . '/inc/enqueue.php';
require_once EV_THEME_PATH . '/inc/menus.php';
require_once EV_THEME_PATH . '/inc/widgets.php';