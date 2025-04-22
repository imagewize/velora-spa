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
    // Define all pattern categories in a single array
    $pattern_categories = array(
        'moiraine/features' => __('Features', 'velora-spa'),
        'moiraine/posts' => __('Posts', 'velora-spa'),
        'moiraine/call-to-action' => __('Call To Action', 'velora-spa'),
        'moiraine/testimonials' => __('Testimonials', 'velora-spa'),
        'moiraine/hero' => __('Hero', 'velora-spa'),
        // You can easily add more categories here as needed
    );
    
    // Register all categories in a single loop
    foreach ($pattern_categories as $category => $label) {
        register_block_pattern_category($category, array('label' => $label));
    }
}
add_action('init', 'spa_theme_register_pattern_categories', 5);