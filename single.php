<?php

get_header(); 

while ( have_posts() ) : the_post();

  // SPECIFIC HEADER TEMPLATE - LOADED ONLY IF IT EXISTS
  if (locate_template( array( 'templates/header/single-' . get_post_type() . '.php' ) ) != '') {
    get_template_part( 'templates/header/single-'.get_post_type() );
  } 
  elseif (locate_template( array( 'templates/header/single.php' ) ) != '') {
    get_template_part( 'templates/header/single' );
  }

	get_template_part( 'templates/single/'.get_post_type() );

endwhile; // End of the loop.
		
get_footer();
