<?php

add_action( 'wp_enqueue_scripts', 'moiraine_child_enqueue_styles' );

/**
 * Enqueue Moiraine Child styles.
 *
 * @return void
 */
function moiraine_child_enqueue_styles(): void {
	wp_enqueue_style( 'moiraine-child-style', get_stylesheet_uri(), array( 'moiraine' ), wp_get_theme()->get( 'Version' ) );
}

/**
 * Register pattern categories including parent theme categories.
 */
function spa_theme_register_pattern_categories() {
    // Register parent theme categories to ensure they exist
    register_block_pattern_category(
        'moiraine/features',
        array('label' => __('Features', 'spa-theme'))
    );
    
    register_block_pattern_category(
        'moiraine/posts',
        array('label' => __('Posts', 'spa-theme'))
    );

    register_block_pattern_category(
        'moiraine/call-to-action',
        array('label' => __('Call To Action', 'spa-theme'))
    );

    register_block_pattern_category(
        'moiraine/testimonials',
        array('label' => __('Testimonials', 'spa-theme'))
    );
    
    // You can add more parent theme categories as needed
}
add_action('init', 'spa_theme_register_pattern_categories', 5); 