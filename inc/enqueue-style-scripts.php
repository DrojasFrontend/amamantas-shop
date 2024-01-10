<?php
  function enqueue_style_scripts() {
    global $post;
    $isHome = is_front_page() || is_home();

    // Style WP remove
    wp_deregister_style('wp-block-library');

    // Scripts
    if ($isHome) {
      wp_enqueue_script( 'slickMin', JS_BASE . '/libs/slick.min.js', array(), '1.0.0', array( 'strategy'  => 'defer'));
    }
    
    wp_enqueue_script('mainJs', JS_BASE . 'main.js', array('jquery'), '1.0.0', true);

  }

  add_action('wp_enqueue_scripts', 'enqueue_style_scripts');
?>