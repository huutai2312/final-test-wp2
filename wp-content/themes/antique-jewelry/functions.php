<?php
/**
 * Antique Jewelry functions
 */

if ( ! function_exists( 'antique_jewelry_styles' ) ) :
	function antique_jewelry_styles() {
		// Register theme stylesheet.
		wp_register_style('antique-jewelry-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'antique-jewelry-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'antique_jewelry_styles' );