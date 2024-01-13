<?php
/*
* Cards Info
*/

$group_cards = $args->group_cards;

?>

<section class="section-card-info">
  <figure class="section-card-info__floting">
    <img src="<?= $group_cards['floating_image'] ?>" alt="<?= $group_cards['title_1'] ?>" width="100" height="100">
  </figure>
  <div class="container">
    <h2 class="section-card-info__title"><?= $group_cards['main_title']?></h2>
  </div>
  <div class="section-card-info__grid">
    <?php if (isset($group_cards['icon_1'], $group_cards['title_1'])) { ?>
      <div class="section-card-info__item">
        <figure>
          <img src="<?= $group_cards['icon_1'] ?>" alt="<?= $group_cards['title_1'] ?>" width="475" height="508">
        </figure>
        <p>
          <?= $group_cards['title_1'] ?>
        </p>
        <h3 class="h2">
          <?= $group_cards['detail_1'] ?>
        </h3>
      </div>
    <?php } ?>
    <?php if (isset($group_cards['icon_2'], $group_cards['title_2'])) { ?>
      <div class="section-card-info__item">
        <figure>
          <img src="<?= $group_cards['icon_2'] ?>" alt="<?= $group_cards['title_2'] ?>" width="475" height="508">
        </figure>
        <p>
          <?= $group_cards['title_2'] ?>
        </p>
        <h3 class="h2">
          <?= $group_cards['detail_2'] ?>
        </h3>
      </div>
    <?php } ?>
    <?php if (isset($group_cards['icon_3'], $group_cards['title_3'])) { ?>
      <div class="section-card-info__item">
        <figure>
          <img src="<?= $group_cards['icon_3'] ?>" alt="<?= $group_cards['title_3'] ?>" width="475" height="508">
        </figure>
        <p>
          <?= $group_cards['title_3'] ?>
        </p>
        <h3 class="h2">
          <?= $group_cards['detail_3'] ?>
        </h3>
      </div>
    <?php } ?>
  </div>
</section>
