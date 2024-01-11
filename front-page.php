<?php get_header(); 

$fields = get_fields();

$benefits = (object) [
  'group_benefits' => $fields['group_benefits'],
];
?>

<?php get_template_part('templates/parts/sections/hero'); ?>
<?php get_template_part('templates/parts/sections/benefits', null, $benefits); ?>

<?php get_footer();