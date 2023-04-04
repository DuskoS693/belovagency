
<?php
/**
 * Testimonial Block Template.
 */

$title = get_field('block_title');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}


?>

<h1><?php echo esc_html($title); ?></h1>

<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" >
<?php if( have_rows('items') ): ?>
	<ul class="flex-grid">
		<?php while( have_rows('items') ): the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$text = get_sub_field('text');
			$button_link = get_sub_field('button_link');
			?>
		<li class="col">
			<div class="item-wrap">
				<?php echo wp_get_attachment_image($image); ?>
				<h3><?php echo esc_html($title); ?></h3>
				<p><?php echo esc_html($text); ?></p>
				<?php
				$link = get_sub_field('button_link');
				if( $link ):
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="testimonial-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
</div>
