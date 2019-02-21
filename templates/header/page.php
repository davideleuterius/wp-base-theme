<header class="page-header bg-blue color-white zero">
  <div class="site-wrap flex-grid items-center justify-between">
    <h1 class="fs-40 fw-300 text-uc"> <?=get_the_title() ?></h1>

    <?php 
      if ( get_field('icon_logo') ) :
        $icon_logo = get_field('icon_logo');  ?>
      <div class="icon-logo" style="background-image:url('<?php echo $icon_logo['sizes']['icon-logo']; ?>')"></div>
    <?php 
      endif;

      if ('location' == get_post_type() || ('utility_company' == get_post_type()) || ('state' == get_post_type())) : ?>
      <div class="icon-logo" style="background-image:url('/wp-content/uploads/2015/09/icon-marker-blue.png')"></div>
    <?php 
      endif;
      if ('provider' == get_post_type() ) : ?>
      <div class="icon-logo" style="background-image:url('/wp-content/uploads/2015/09/icon-bulb-blue.png')"></div>
    <?php 
      endif; ?>
  </div>
</header><!-- .page-header -->