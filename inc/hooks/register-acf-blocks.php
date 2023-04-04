<?php


namespace wd_s;

/**
 * ACF Block init
 * @return void
 */
function register_acf_blocks() {
	register_block_type( get_stylesheet_directory() . '/blocks/testimonial' );
}
add_action( 'init', __NAMESPACE__ . '\register_acf_blocks' );

