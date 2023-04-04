<?php
/**
 * The template used for displaying generic elements in the scaffolding library.
 *
 * @package wp-test-domain
 */

use function wd_s\print_scaffolding_section;

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading" id="<?php esc_html_e( 'elements', 'wp-test-domain' ); ?>"><?php esc_html_e( 'Generic Elements', 'wp-test-domain' ); ?></h2>

	<?php
	// Right-aligned Image.
	print_scaffolding_section(
		[
			'title'       => 'Numeric Pagination',
			'description' => 'Display numeric pagination.',
			'usage'       => 'wp_test_domain_print_numeric_pagination()',
			'output'      => '
				<nav class="pagination-container">
					<a class="prev page-numbers" href="#>&laquo;</a>
					<a class="page-numbers" href="#">1</a>
					<span aria-current="page" class="page-numbers current">2</span>
					<a class="page-numbers" href="#">3</a>
					<a class="next page-numbers" href="#">&raquo;</a>
				</nav>
			',
		]
	);

	?>
</section>
