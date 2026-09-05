<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wp_dethbird_sketchbook_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'custom-line-height' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'search-form',
        )
    );
}
add_action( 'after_setup_theme', 'wp_dethbird_sketchbook_theme_setup' );

function wp_dethbird_sketchbook_theme_enqueue_assets() {
    wp_enqueue_style(
        'wp-dethbird-sketchbook-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'wp_dethbird_sketchbook_theme_enqueue_assets' );
