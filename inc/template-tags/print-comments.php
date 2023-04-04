<?php
/**
 * Display the comments if the count is more than 0.
 *
 * @package wp-test-domain
 */

namespace wd_s;

/**
 * Display the comments if the count is more than 0.
 *
 * @author WebDevStudios
 */
function print_comments() {
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}
