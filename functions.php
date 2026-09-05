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

function wp_dethbird_sketchbook_theme_body_classes( $classes ) {
    if ( is_front_page() && ! is_paged() ) {
        $classes[] = 'dethbird-landing-page';
    }

    return $classes;
}
add_filter( 'body_class', 'wp_dethbird_sketchbook_theme_body_classes' );

function wp_dethbird_sketchbook_theme_register_home_hero_pattern() {
    $pattern_path = get_theme_file_path( 'patterns/home-hero.php' );

    if ( ! file_exists( $pattern_path ) ) {
        return;
    }

    ob_start();
    include $pattern_path;
    $pattern_content = ob_get_clean();

    register_block_pattern(
        'wp-dethbird-sketchbook-theme/home-hero',
        array(
            'title'       => __( 'Home Hero', 'wp-dethbird-sketchbook-theme' ),
            'description' => __( 'A quiet cassette artwork hero for the homepage.', 'wp-dethbird-sketchbook-theme' ),
            'categories'  => array( 'featured' ),
            'content'     => $pattern_content,
        )
    );
}
add_action( 'init', 'wp_dethbird_sketchbook_theme_register_home_hero_pattern' );
