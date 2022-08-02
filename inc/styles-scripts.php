<?php
/**
 * Style and script handling.
 */

/**
 * Only load styles for blocks that are used on the current page.
 *
 * See https://make.wordpress.org/core/2021/07/01/block-styles-loading-enhancements-in-wordpress-5-8/
 */
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Enqueue main stylesheet on the frontend.
 */
function bbfs_add_frontend_styles() {
	wp_enqueue_style(
		'bbfs-frontend',
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'bbfs_add_frontend_styles' );

/**
 * Use main stylesheet as editor stylesheet.
 *
 * See https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#editor-styles.
 */
function bbfs_add_backend_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'bbfs_add_backend_styles' );
