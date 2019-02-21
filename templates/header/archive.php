<h1 class="zero"><?= get_the_archive_title() ?></h1>

<?php
if ($intro = get_the_archive_description()) :
  echo '<div class="archive-intro fs-20 spc-bottom-1 pad-bottom">'.$intro.'<hr></div>';
else:
  echo '<hr class="spc-bottom-1 pad-bottom">';
endif;
