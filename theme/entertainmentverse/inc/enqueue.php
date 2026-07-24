<?php

if (!defined('ABSPATH')) {
    exit;
}

function lumora_enqueue_assets() {

    /* CSS */
    wp_enqueue_style(
        'lumora-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        lumora_version()
    );

    /* JavaScript */
    wp_enqueue_script(
        'lumora-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        lumora_version(),
        true
    );

}

add_action('wp_enqueue_scripts', 'lumora_enqueue_assets');