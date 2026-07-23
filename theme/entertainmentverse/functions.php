<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Core Files
|--------------------------------------------------------------------------
*/

require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/helpers.php';

/*
|--------------------------------------------------------------------------
| Classes
|--------------------------------------------------------------------------
*/

require_once get_template_directory() . '/classes/class-theme.php';
require_once get_template_directory() . '/classes/class-assets.php';
require_once get_template_directory() . '/classes/class-tmdb.php';
require_once get_template_directory() . '/classes/class-security.php';
require_once get_template_directory() . '/classes/class-search.php';