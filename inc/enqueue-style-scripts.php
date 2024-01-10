<?php
  
  function enqueue_style_scripts() {
    global $post;
    $isHome = is_front_page() || is_home();

    wp_enqueue_style('fontCss', CSS_FONTS . 'fonts.css', array(), '1.0.0');
    wp_enqueue_style('mainCss', CSS_BASE . 'main.css', array(), '1.0.0');
    // Scripts
    if ($isHome) {
      wp_enqueue_style('home', CSS_BASE . 'home.css', array(), '1.0.0');
      wp_enqueue_style('slickCss', CSS_BASE . 'slick.css', array(), '1.0.0');
      wp_enqueue_script( 'slickMin', JS_BASE . '/libs/slick.min.js', array(), '1.0.0', array( 'strategy'  => 'defer'));
    }
    
    wp_enqueue_script('mainJs', JS_BASE . 'main.js', array('jquery'), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'enqueue_style_scripts');
?>