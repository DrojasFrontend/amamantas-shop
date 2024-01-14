<?php get_header(); 

$fields = get_fields();

$benefits = (object) [
  'group_benefits' => $fields['group_benefits'],
];

$product_category = (object) [
  'group_product_category' => $fields['group_product_category'],
];

$banner_top = (object) [
  'group_banner_top' => $fields['group_banner_top'],
];

$product_cards = (object) [
  'group_colections' => $fields['group_colections'],
];

$cards_info = (object) [
  'group_cards' => $fields['group_cards'],
];

$banner_bottom = (object) [
  'group_banner_bottom' => $fields['group_banner_bottom'],
];

?>

<?php get_template_part('templates/parts/sections/hero'); ?>
<?php get_template_part('templates/parts/sections/benefits', null, $benefits); ?>
<?php get_template_part('templates/parts/sections/product-category', null, $product_category); ?>
<?php get_template_part('templates/parts/sections/banner-top', null, $banner_top); ?>
<?php get_template_part('templates/parts/sections/product-cards', null, $product_cards); ?>
<?php get_template_part('templates/parts/sections/cards-info', null, $cards_info); ?>
<?php get_template_part('templates/parts/sections/banner-bottom', null, $banner_bottom); ?>
<?php get_template_part('templates/parts/sections/blog-posts'); ?>

<?php get_footer();