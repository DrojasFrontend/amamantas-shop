<?php
/*
* Hero
*/

$queryArgs = [
  // todo use your post type here
  'post_type' => 'slider',
  'post_status' => 'publish',
  'posts_per_page' => 5,
];

// SQL query will be executed during this line
$query = new WP_Query($queryArgs);

// @var WP_Posts[]
$posts = $query->get_posts(); ?>

<section class="section-hero">
  <div class="slick-hero">
    <?php foreach ($posts as $post) {
      $postId = $post->ID;
      $title = get_the_title($postId);
      $bckg = get_field('bckg', $postId);
      $img = get_field('img', $postId);
      $primary_text = get_field('primary_text', $postId);
      $icon = get_field('icon', $postId);
      $tag_color = get_field('tag_color', $postId);
      $secondary_text = get_field('secondary_text', $postId);
    ?>
    <div>
      <div class="section-hero__slide" style="background-image: url(<?= $bckg ?>)">
        <div class="section-hero__container">
          <div class="section-hero__grid">
            <div class="">
              <img src="<?= $img ?>" alt="">
            </div>
            <div class="section-hero__text">
              <div class="h2"><?= $primary_text ?></div>
              <img src="<?= $icon ?>" width="517" height="83" alt="amamantas slide">
              <style type="text/css">
                .section-hero__text strong {
                    position: relative;
                    z-index: 1;
                }
                .section-hero__text strong:before {
                  content: "";
                  position: absolute;
                  left: calc(0% + -5px);
                  top: 8px;
                  display: inline;
                  width: calc(100% + 10px);
                  height: 55px;
                  border-radius: 15px;
                  background-color: <?= htmlspecialchars($tag_color, ENT_QUOTES, 'UTF-8'); ?>;
                  z-index: -1;
                }
              </style>
              <h2 class="h1-poppins"><?= $secondary_text ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="slick-actions">
    <button class="slick-button" id="customPrev">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M14 17.75a.74.74 0 0 1-.53-.22l-5-5a.75.75 0 0 1 0-1.06l5-5a.75.75 0 0 1 1.06 1.06L10.06 12l4.47 4.47a.75.75 0 0 1-.53 1.28Z"/></svg>
    </button>
    <button class="slick-button" id="customNext">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#ffffff" d="M10 17.75a.74.74 0 0 1-.53-.22.75.75 0 0 1 0-1.06L13.94 12 9.47 7.53a.75.75 0 0 1 1.06-1.06l5 5a.75.75 0 0 1 0 1.06l-5 5a.74.74 0 0 1-.53.22Z"/></svg>
    </button>
  </div>
</section>