<?php get_header(); 

$fields = get_fields();

$benefits = (object) [
  'icon' => $fields['icon'],
  'service' => $fields['service'],
  'icon_2' => $fields['icon_2'],
  'service_2' => $fields['service_2'],
  'icon_3' => $fields['icon_3'],
  'service_3' => $fields['service_3'],
  'icon_4' => $fields['icon_4'],
  'service_4' => $fields['service_4'],
];
?>

<?php get_template_part('templates/parts/sections/hero'); ?>
<?php get_template_part('templates/parts/sections/benefits', null, $benefits); ?>

<?php get_footer();