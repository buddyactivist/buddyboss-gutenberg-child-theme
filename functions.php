<?php

/**
 * BuddyBoss Gutenberg Child Theme
 */

// Carica lo stile del child theme
function buddyboss_gutenberg_child_enqueue_styles() {
    wp_enqueue_style(
        'buddyboss-gutenberg-child-style',
        get_stylesheet_uri(),
        array( 'buddyboss-theme' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'buddyboss_gutenberg_child_enqueue_styles' );

// Abilita template a blocchi (Gutenberg)
add_theme_support( 'block-templates' );
add_theme_support( 'block-template-parts' );
