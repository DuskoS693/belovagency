<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package wp-test-domain
 */

namespace wd_s;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'wp-test-domain' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'wp-test-domain' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'wp-test-domain' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'wp-test-domain' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'wp-test-domain' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'wp-test-domain' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'wp-test-domain' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'wp-test-domain' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
