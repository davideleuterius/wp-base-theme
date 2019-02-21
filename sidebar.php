
<?php

$slug = get_page_slug();
$parent = get_page_parent_slug();

// SPECIFIC SIDEBAR TEMPLATE - LOADED IF TEMPLATE EXISTS
if (locate_template( array( 'templates/sidebar/' . $slug . '.php' ) ) != '') {
  get_template_part('templates/sidebar/'.$slug);
} 
else {
  get_template_part('templates/sidebar/page');
}