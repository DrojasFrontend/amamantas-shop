<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@300;400;700;800&display=swap" rel="stylesheet">

<?php wp_enqueue_style('mainCss',  CSS_BASE . 'main.css', array(), '1.0.0'); ?>

<?php
  global $post;
  $isHome = is_front_page() || is_home();
  // Styles
  if ($isHome) {
    wp_enqueue_style('homeCss',  CSS_BASE . 'home.css', array(), '1.0.0');
  } else if (!empty($post) && $post->post_type == 'page') {
    if ($post->post_name == 'soluciones') {
      wp_enqueue_style('solutionsCss',  CSS_BASE . 'solutions.css', array(), '1.0.0');
    } 
  }
?>

<?php wp_enqueue_style('slickCss',  CSS_BASE . 'slick.css', array(), '1.0.0'); ?>