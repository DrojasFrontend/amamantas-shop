<?php
/*
* Testimonials
*/

$group_testimonials = $args->group_testimonials;

$testimonialArgs = [
	'post_type' => 'testimonial',
	'posts_per_page' => 100,
	'order' => 'DESC',
	'orderby' => 'date',
];

$testimonialQuery = new WP_Query($testimonialArgs); 

?>

<section class="testimonials">
  <figure class="testimonials__wave-right">
    <img src="<?= $group_testimonials['image_right']; ?>" alt="Image right">
  </figure>
  <figure class="testimonials__wave-left">
    <img src="<?= $group_testimonials['image_left']; ?>" alt="Image left">
  </figure>
	<div class="container">
    <div class="heading">
      <h2><?= $group_testimonials['title']; ?></h2>
    </div>
  </div>
  <ul class="testimonials__grid">
    <?php if ($testimonialQuery->have_posts()) {
      while ($testimonialQuery->have_posts()) { $testimonialQuery->the_post(); ?>
        <li class="testimonial">
          <div class="testimonial__wrapper">
            <?php if (has_post_thumbnail()) { ?>
              <figure class="testimonial__thumbnail">
                <?= the_post_thumbnail('medium'); ?>
              </figure>
            <?php } ?>
            <div class="testimonial__content">
              <h3 class="testimonial__title"><?= wp_trim_words( get_the_title(), 8, '...' ); ?></h3>
              <div class="testimonial__excerpt">
                <?= wp_trim_words(get_the_excerpt(), 25, '...'); ?>
              </div>
            </div>
          </div>
        </li>
      <?php }
      } else { ?>
        <h2>No se encontraron testimoninios.</h2>
      <?php }
      wp_reset_postdata();
    ?>
  </ul>
</section>