<?php get_header(); 

$fields = get_fields();

$benefits = (object) [
  'group_benefits' => $fields['group_benefits'],
];

$product_category = (object) [
  'group_product_category' => $fields['group_product_category'],
];

$product_cards = (object) [
  'group_colections' => $fields['group_colections'],
];
?>

<?php get_template_part('templates/parts/sections/hero'); ?>
<?php get_template_part('templates/parts/sections/benefits', null, $benefits); ?>
<?php get_template_part('templates/parts/sections/product-category', null, $product_category); ?>
<?php get_template_part('templates/parts/sections/product-cards', null, $product_cards); ?>

<?php get_footer();