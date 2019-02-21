<?php

 /* ----------------------------------------------------------------------------
  Theme Support / Various Cleanup Functions / Enqueue Scripts
 ---------------------------------------------------------------------------- */

 require_once('functions/theme.php');
 require_once('functions/cleanup.php');
 require_once('functions/enqueue.php');
 //require_once('functions/types.php');
 //require_once('functions/taxonomy.php');

// disable Gutenberg

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);