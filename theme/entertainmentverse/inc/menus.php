<?php

if (!defined('ABSPATH')) {
    exit;
}

function lumora_register_menus() {

    register_nav_menus(array(

        'primary' => __('Primary Menu', 'lumora'),

    ));

}

add_action('after_setup_theme', 'lumora_register_menus');