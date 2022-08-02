<?php
/**
 * Remove default WordPress patterns.
 *
 * See https://wpdevelopmentcourses.ck.page/posts/i-m-back-with-a-tutorial-on-how-to-remove-the-default-block-patterns
 *
 * To add patterns, create a `patterns` directory, and add your files in there.
 *
 * See https://make.wordpress.org/core/2022/05/02/new-features-for-working-with-patterns-and-themes-in-wordpress-6-0/
 */

/**
 * Prevent the loading of patterns from the WordPress.org Pattern Directory
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Remove patterns that ship with WordPress Core.
 */
function bbfs_remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'bbfs_remove_core_block_patterns' );
