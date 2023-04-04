<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, wp_test_domain_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-test-domain
 */

use function wd_s\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'wp_test_domain_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
