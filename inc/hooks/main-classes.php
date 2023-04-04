<?php
/**
 * Adds custom classes to apply to <main>
 *
 * @package wp-test-domain
 */

namespace wd_s;

/**
 * Adds custom classes to apply to <main>
 *
 * @author WebDevStudios
 *
 * @param array $new_classes Classes for the <main> element.
 *
 * @return array main classes.
 */
function main_classes( $new_classes ) {

	$classes = [ 'site-main' ];

	if ( ! empty( $new_classes ) ) {
		$classes = array_merge( $classes, $new_classes );
	}

	$classes = apply_filters( 'wp_test_domain_main_classes', $classes );

	return implode( ' ', $classes );
}
