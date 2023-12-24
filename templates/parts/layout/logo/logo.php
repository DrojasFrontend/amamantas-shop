<?php if($args['logo'] == '1') {?> 
  <?= the_custom_logo(); ?>
<?php } else { ?>
  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
  <img src="<?php echo esc_url(get_theme_mod('logo_secondary')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
  </a>
<?php } ?>
