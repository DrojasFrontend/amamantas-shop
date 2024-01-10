<?php

// Enable Custom logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// Add Logo Secundary
function logo_secondary($wp_customize) {
	$wp_customize->add_section('logo_secondary', array(
		'title'    => __('Logo secundario', 'amamantas-shop'),
		'priority' => 30,
	));

	$wp_customize->add_setting('logo_secondary', array(
		'default' => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_secondary', array(
		'label'    => __('Logo secundario', 'amamantas-shop'),
		'section'  => 'logo_secondary',
		'settings' => 'logo_secondary',
	)));
}

add_action('customize_register', 'logo_secondary');

// Enable SVG
function custom_allow_svg_upload( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_allow_svg_upload' );

// Sidebar
function registrar_sidebar_footer_personalizado() {
	register_sidebar( array(
			'name'          => 'Footer',
			'id'            => 'footer_sidebar',
			'description'   => 'Esta es una barra lateral personalizada.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget_titulo">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'registrar_sidebar_footer_personalizado' );

// Remove All styles and js wordpress

function wps_deregister_styles() {
  wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

// ACF json

function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );