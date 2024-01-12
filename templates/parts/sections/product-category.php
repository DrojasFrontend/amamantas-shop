<?php
/*
* Product Category
*/

$group_product_category = $args->group_product_category;

?>

<section class="section-product-category">
  <div class="container">
    <span class="line">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1078 53"><path stroke="#FF7B6E" stroke-dasharray="15 15" stroke-linecap="round" stroke-width="3" d="M2 50.27c29.32-23.43 67.1-27.09 100.57-34.18 28.98-6.14 59.27-13.71 88.7-14.07 55.63-.68 107.85 18.92 161.38 35.07 93.49 28.2 188.67 5.62 282.84.67 42.41-2.23 84.86-1.57 127.3-1.57 15.87 0 31.76-.3 47.63 0 19.6.37 39.75 7.12 59.23 10.05 24.72 3.73 49.8 6.2 74.71 2.9 17.05-2.24 33.7-8.33 50.55-12.05 26.5-5.85 54.18-6.93 81.09-6.93"/></svg>
    </span>
    <div class="section-product-category__grid">
      <?php if (isset($group_product_category['image_1'], $group_product_category['category_1'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_1'] ?>" alt="<?= $group_product_category['category_1'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_1'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($group_product_category['image_2'], $group_product_category['category_2'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_2'] ?>" alt="<?= $group_product_category['category_2'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_2'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($group_product_category['image_3'], $group_product_category['category_3'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_3'] ?>" alt="<?= $group_product_category['category_3'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_3'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($group_product_category['image_4'], $group_product_category['category_4'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_4'] ?>" alt="<?= $group_product_category['category_4'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_4'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($group_product_category['image_5'], $group_product_category['category_5'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_5'] ?>" alt="<?= $group_product_category['category_5'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_5'] ?>
          </p>
        </div>
      <?php } ?>
      <?php if (isset($group_product_category['image_6'], $group_product_category['category_6'])) { ?>
        <div class="section-product-category__item">
          <figure>
            <img src="<?= $group_product_category['image_6'] ?>" alt="<?= $group_product_category['category_6'] ?>" width="170" height="170">
          </figure>
          <p class="h3">
            <?= $group_product_category['category_6'] ?>
          </p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
