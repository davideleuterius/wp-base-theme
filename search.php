<?php

get_header(); 

if ( have_posts() ) : ?>

<header class="entry-header">
	<h1 class="entry-title">Search Results for: <span><?= get_search_query() ?></span></h1>
</header>

<?php

	while ( have_posts() ) : the_post();
		get_template_part( 'templates/loop', 'search' );
	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'templates/content', 'none' );

endif; 

get_footer();
