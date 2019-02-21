
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">Not Found</h1>
	</header>
	<div class="page-content">
		<?php
		if ( is_search() ) : ?>

			<p>Nothing matching your search could be found.</p>
			<?php
				get_search_form();

		else : ?>

			<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
			<?php
				get_search_form();

		endif; ?>
	</div>
</section>