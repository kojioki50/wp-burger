<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage wp-humberger
 * @since wp-humberger 1.0
 */

get_header();
?>

	
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'wp-humberger' ); ?></h1>

	<div>
		<div>
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'wp-humberger' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_sidebar();
get_footer();
