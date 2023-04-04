<?php
/**
 * Customizer sections.
 *
 * @package wp-test-domain
 */

namespace wd_s;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'wp_test_domain_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'wp-test-domain' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'wp_test_domain_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'wp-test-domain' ),
			'description' => esc_html__( 'Links here power the print_social_network_links() template tag.', 'wp-test-domain' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'wp_test_domain_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'wp-test-domain' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'wp_test_domain_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'wp-test-domain' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
