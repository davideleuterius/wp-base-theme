<?php

/**
 * Removes actions and filters to clean up the head
 */
function site_head_cleanup() {

	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	add_filter( 'emoji_svg_url', '__return_false' );


	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

	remove_action('welcome_panel', 'wp_welcome_panel');

}
add_action( 'init', 'site_head_cleanup' );


/* NAVIGATION ---------------------- */




//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'current-page-item',
		'current-page-parent',
		'current-page-ancestor',
    'current-menu-item',
    'current-menu-parent',
    'current-menu-ancestor',
		'first',
		'last',
		'vertical',
		'horizontal'
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
//add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');
//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		//List of menu item classes that should be changed to "active"
		'current-page-item' => 'active',
		'current-page-parent' => 'active',
		'current-page-ancestor' => 'active',
    'current-menu-item' => 'active',
    'current-menu-parent' => 'active',
    'current-menu-ancestor'=> 'active'
	);
	$text = str_replace(array_keys($replace), $replace, $text);
		return $text;
}
add_filter ('wp_nav_menu','current_to_active');


function remove_footer_admin () {
	echo 'WordPress Design &amp; Development by 
	<a href="#" target="_blank">Your Name Here</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;

    return array(

        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'edit.php', // Posts
        //'edit.php?post_type=acevent',
        //'edit.php?post_type=acproduct',
        //'edit.php?post_type=testimonial',
        'upload.php', // Media
        //'edit-comments.php', // Comments
        //'admin.php?page=acf-options-blog-sidebar',
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');


function admin_menu_page_removal() {
    remove_menu_page( 'edit-comments.php');
}
add_action( 'admin_menu', 'admin_menu_page_removal' );

