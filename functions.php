<?php
/**
 * Mono Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Mono Child 1.0.1
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function mono_child_styles() {
    $theme = wp_get_theme();
	wp_enqueue_style( 'mono-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'mono-child-style', get_stylesheet_uri(), array( 'mono-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'mono_child_styles' );
