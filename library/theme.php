<?php

if ( ! function_exists( 'site_setup' ) ) :

	function site_setup() {

	  define( 'TDIR', get_template_directory_uri() );
	  define( 'ADIR', get_template_directory_uri() . '/assets' );

	  register_nav_menus( array(
			'main-menu' 	=> 'Header',
			'footer-menu' => 'Footer'
		) );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
		) );


	}

endif;
add_action( 'after_setup_theme', 'site_setup' );


function page_slug_on_body_class( $classes ) {
	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-'.$post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'page_slug_on_body_class' );

function get_page_slug() {
	if ( is_singular( 'page' ) ) {
		global $post;
		$slug = $post->post_name;
	}
	return $slug;
}




