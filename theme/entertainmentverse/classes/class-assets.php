<?php

if (!defined('ABSPATH')) {
    exit;
}

class Lumora_Assets {

    public function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'enqueue']);

    }

    public function enqueue() {

        wp_enqueue_style(
            'lumora-main',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            '1.0.2'
        );

    }

}

new Lumora_Assets();