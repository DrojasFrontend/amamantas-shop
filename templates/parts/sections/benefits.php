<?php
/*
* Benefits
*/

$benefits = $args->group_benefits;

?>

<section class="section-benefits">
  <div class="container">
    <div class="section-benefits__grid">
      <?php if (isset($benefits['icon_1'], $benefits['service_1'])) { ?>
        <div class="section-benefits__item">
          <figure>
            <img src="<?= $benefits['icon_1'] ?>" alt="<?= $benefits['service_1'] ?>" width="64" height="64">
          </figure>
          <p>
            <?= $benefits['service_1'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($benefits['icon_2'], $benefits['service_2'])) { ?>
        <div class="section-benefits__item">
          <figure>
            <img src="<?= $benefits['icon_2'] ?>" alt="<?= $benefits['service_2'] ?>" width="64" height="64">
          </figure>
          <p>
            <?= $benefits['service_2'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($benefits['icon_3'], $benefits['service_3'])) { ?>
        <div class="section-benefits__item">
          <figure>
            <img src="<?= $benefits['icon_3'] ?>" alt="<?= $benefits['service_3'] ?>" width="64" height="64">
          </figure>
          <p>
            <?= $benefits['service_3'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($benefits['icon_4'], $benefits['service_4'])) { ?>
        <div class="section-benefits__item">
          <figure>
            <img src="<?= $benefits['icon_4'] ?>" alt="<?= $benefits['service_4'] ?>" width="64" height="64">
          </figure>
          <p>
            <?= $benefits['service_4'] ?>
          </p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
