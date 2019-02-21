<?php
get_header(); 

while ( have_posts() ) : the_post();

  $slug = get_page_slug();
  $parent = get_page_parent_slug();

  // SPECIFIC HEADER TEMPLATE - LOADED ONLY IF IT EXISTS
  if (locate_template( array( 'templates/header/page-' . $slug . '.php' ) ) != '') {
    get_template_part( 'templates/header/page-'.$slug );
  } 
  elseif (locate_template( array( 'templates/header/page.php' ) ) != '') {
    get_template_part( 'templates/header/page' );
  }

  // SPECIFIC CONTENT TEMPLATE - LOADED ONLY IF IT EXISTS
  if (locate_template( array( 'templates/content/page-' . $slug . '.php' ) ) != '') {
    get_template_part( 'templates/content/page-'.$slug );
  } 
  else {
    get_template_part( 'templates/content/page' );
    // LOAD POST LOOP TEMPLATE IF IT EXISTS
    if (locate_template( array( 'templates/loop/' . $slug . '.php' ) ) != '') {
      get_template_part( 'templates/loop/'.$slug );
    } 
  }
  // optional
  // get_sidebar();
	
endwhile;
		
get_footer();
