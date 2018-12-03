<?php
get_header(); 

if ( have_posts() ) :
	while ( have_posts() ) : the_post();

		get_template_part( 'templates/loop', 'post' );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'templates/content', 'none' );

endif; ?>

		</main>
	</div>
<?php

get_footer();
