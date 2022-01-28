<?php
/**
 * Theme Support.
 *
 * @package WordPress
 * @subpackage Hydro
 * @since 1.0.0
 */

if ( ! function_exists( 'hydra_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function hydra_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
endif;

add_action( 'after_setup_theme', 'hydra_theme_support' );
