<?php
/**
 * Theme Style.
 *
 * @package WordPress
 * @subpackage Hydro
 * @since 1.0.0
 */

if ( ! function_exists( 'hydra_enqueue_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 */
	function hydra_enqueue_styles() {

		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'hydra-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$theme_version
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hydra-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'hydra_enqueue_styles' );
