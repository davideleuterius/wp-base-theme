
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="'<? the_permalink()?>" rel="bookmark"><? the_title()?></a></h2>
	</header>
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
