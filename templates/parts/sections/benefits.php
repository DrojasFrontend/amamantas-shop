<?php
/*
* Benefits
*/

$icon_1 = $args->icon;
$service_1 = $args->service;
$icon_2 = $args->icon_2;
$service_2 = $args->service_2;
$icon_3 = $args->icon_3;
$service_3 = $args->service_3;
$icon_4 = $args->icon_4;
$service_4 = $args->service_4;

?>

<section class="section-benefits">
  <div class="container">
    <div class="section-benefits__grid">
      <div class="section-benefits__item">
        <figure>
          <img src="<?= $icon_1 ?>" alt="<?= $service_1 ?>" width="64" height="64">
        </figure>
        <p>
          <?= $service_1 ?>
        </p>
      </div>
      <div class="section-benefits__item">
        <figure>
          <img src="<?= $icon_2 ?>" alt="<?= $service_2 ?>" width="64" height="64">
        </figure>
        <p>
          <?= $service_2 ?>
        </p>
      </div>
      <div class="section-benefits__item">
        <figure>
          <img src="<?= $icon_3 ?>" alt="<?= $service_3 ?>" width="64" height="64">
        </figure>
        <p>
          <?= $service_3 ?>
        </p>
      </div>
      <div class="section-benefits__item">
        <figure>
          <img src="<?= $icon_4 ?>" alt="<?= $service_4 ?>" width="64" height="64">
        </figure>
        <p>
          <?= $service_4 ?>
        </p>
      </div>
    </div>
  </div>
</section>