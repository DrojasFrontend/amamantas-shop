<?php
/*
* Product Card
*/

$group_colections = $args->group_colections;

?>

<section class="section-product-card">
  <div class="container">
    <div class="section-product-card__grid">
      <?php if (isset($group_colections['image_1'], $group_colections['collection_1'])) { ?>
        <a href="<?= $group_colections['link_1'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_1'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_1'] ?>" alt="<?= $group_colections['collection_1'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
      <?php if (isset($group_colections['image_2'], $group_colections['collection_2'])) { ?>
        <a href="<?= $group_colections['link_2'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_2'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_2'] ?>" alt="<?= $group_colections['collection_2'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
      <?php if (isset($group_colections['image_3'], $group_colections['collection_3'])) { ?>
        <a href="<?= $group_colections['link_3'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_3'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_3'] ?>" alt="<?= $group_colections['collection_1'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
      <?php if (isset($group_colections['image_4'], $group_colections['collection_4'])) { ?>
        <a href="<?= $group_colections['link_4'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_4'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_4'] ?>" alt="<?= $group_colections['collection_4'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
      <?php if (isset($group_colections['image_5'], $group_colections['collection_5'])) { ?>
        <a href="<?= $group_colections['link_5'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_5'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_5'] ?>" alt="<?= $group_colections['collection_5'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
      <?php if (isset($group_colections['image_6'], $group_colections['collection_6'])) { ?>
        <a href="<?= $group_colections['link_6'] ?>" class="section-product-card__item">
          <p>
            <?= $group_colections['collection_6'] ?>
          </p>
          <figure>
            <img src="<?= $group_colections['image_6'] ?>" alt="<?= $group_colections['collection_6'] ?>" width="475" height="508">
          </figure>
        </a>
      <?php } ?>
    </div>
  </div>
</section>
