<?php

 /* ----------------------------------------------------------------------------
  Theme Support / Various Cleanup Functions / Enqueue Scripts
 ---------------------------------------------------------------------------- */

 require_once('functions/theme.php');
 require_once('functions/cleanup.php');
 require_once('functions/enqueue.php');

/*
if ( ! function_exists( 'site_setup' ) ) :
	
	function site_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'site-featured-image', 640, 9999 );

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Header', 'site' ),
			'footer-menu' => esc_html__( 'Footer', 'site' ),
			) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}

endif;
add_action( 'after_setup_theme', 'site_setup' );
*/