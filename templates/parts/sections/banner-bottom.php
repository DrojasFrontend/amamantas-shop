<?php
/*
* Banner Bottom
*/

$group_banner_bottom = $args->group_banner_bottom;

?>

<section class="section-banner">
  <div class="container">
    <a href="<?= $group_banner_bottom['link'] ?>">
      <figure>
        <img src="<?= $group_banner_bottom['banner'] ?>" alt="Banner promo" width="1240" height="239">
      </figure>
    </a>
  </div>
</section>