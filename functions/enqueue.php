<?php
/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
  wp_enqueue_style( 'base-style', ADIR . '/css/site.min.css', '1.0.0' );
  wp_enqueue_style( 'site-style', get_stylesheet_uri() );
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'site-js', ADIR . '/js/site.min.js', 'jquery', '1.0.0', TRUE );
  
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) :
    wp_enqueue_script( 'comment-reply' );
  endif;
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );
