<?php
// Define base URLs and constants
define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('PLUGINS_BASE', plugins_url());
define('IMG_BASE', URL_BASE . 'assets/img/');
define('CSS_BASE', URL_BASE . 'assets/css/');
define('CSS_FONTS', URL_BASE . 'assets/fonts/');
define('JS_BASE', URL_BASE . 'assets/js/');

// Include necessary files
$incPath = get_template_directory() . '/inc/';
require_once($incPath . 'enqueue-style-scripts.php');
require_once($incPath . 'theme-setup.php');
require_once($incPath . 'woocommerce.php');

// Remove the admin bar for non-admin users
function remove_admin_bar() {
  if (!current_user_can('manage_options')) {
    show_admin_bar(false);
  }
}
add_action('after_setup_theme', 'remove_admin_bar');
?>
