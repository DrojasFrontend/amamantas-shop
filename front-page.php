<?php get_header(); 

$fields = get_fields();

$benefits = (object) [
  'group_benefits' => $fields['group_benefits'],
];

$product_category = (object) [
  'group_product_category' => $fields['group_product_category'],
];
?>

<?php get_template_part('templates/parts/sections/hero'); ?>
<?php get_template_part('templates/parts/sections/benefits', null, $benefits); ?>
<?php get_template_part('templates/parts/sections/product-category', null, $product_category); ?>

<?php get_footer();