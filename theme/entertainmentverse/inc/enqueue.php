<?php

if (!defined('ABSPATH')) {
    exit;
}

function lumora_enqueue_assets() {

    wp_enqueue_style(
        'lumora-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.1'
    );

}

add_action('wp_enqueue_scripts', 'lumora_enqueue_assets');