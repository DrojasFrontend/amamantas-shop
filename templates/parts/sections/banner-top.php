<?php
/*
* Banner Bottom
*/

$group_banner_top = $args->group_banner_top;

?>

<section class="section-banner">
  <div class="container">
    <a href="<?= $group_banner_top['link'] ?>">
      <figure>
        <img src="<?= $group_banner_top['banner'] ?>" alt="Banner promo" width="1240" height="239">
      </figure>
    </a>
  </div>
</section>