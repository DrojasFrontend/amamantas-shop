<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Amamantas_Shop
 * @since Amamantas Shop 1.0
 */

get_header();
?>

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'amamantas-shop' ); ?></h1>
	</header>

	<div class="error-404">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'amamantas-shop' ); ?></p>
		</div>
	</div>

<?php
get_footer();
