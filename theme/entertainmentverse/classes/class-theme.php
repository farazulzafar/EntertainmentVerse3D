<?php

if (!defined('ABSPATH')) {
    exit;
}

class Lumora_Theme {

    public function __construct() {

        add_action('after_setup_theme', [$this, 'setup']);

    }

    public function setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('custom-logo');

        add_theme_support('menus');

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ));

    }

}

new Lumora_Theme();