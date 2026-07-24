<?php

if (!defined('ABSPATH')) {
    exit;
}

class Lumora_Assets {

    public function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'enqueue']);

    }

    public function enqueue() {

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

}

new Lumora_Assets();