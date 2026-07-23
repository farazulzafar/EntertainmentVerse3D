<?php

/* ==========================================
   Lumora Theme Setup
========================================== */

function lumora_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('menus');

    register_nav_menus(array(

        'primary' => __('Primary Menu', 'lumora'),

    ));

}

add_action('after_setup_theme', 'lumora_theme_setup');


/* ==========================================
   Load Theme Assets
========================================== */

function lumora_enqueue_assets() {

    wp_enqueue_style(

        'lumora-main',

        get_template_directory_uri() . '/assets/css/main.css',

        array(),

        '1.0.0'

    );

}

add_action('wp_enqueue_scripts', 'lumora_enqueue_assets');
