<?php
if (!defined('ABSPATH')) {
	exit; // Prevent access directly
}

// Create id attribute allowing for custom "anchor" value.
$id = 'oeg-testimonial-slider-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial-slider';
if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$testimonials = get_field('testimonial');
$bgColor = get_field('bg_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color:<?php echo $bgColor;  ?>">
	<div class="ts-wrapper">
		<?php

		// Check rows exists.
		if (have_rows('testimonial')) : ?>
			<?php
			// Loop through rows.
			while (have_rows('testimonial')) : the_row();

				// Load sub field value.
				$quote = get_sub_field('quote');
				$name = get_sub_field('name');
				$info = get_sub_field('info');
				$tsphoto = get_sub_field('photo');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				$cite = get_sub_field('cite')
			?>

				<div class="mySlides">
					<div class="mySlidesContainer">

						<?php if ($quote) : ?>
							<blockquote <?php if ($cite) : ?> cite="<?php echo $cite; ?>" <?php endif; ?>><?php echo $quote; ?></blockquote>
						<?php endif; ?>

						<?php if ($name) : ?>
							<p class="author font-bold text-base font-sans mb-0"><?php echo $name; ?></p>
						<?php endif; ?>

						<?php if ($info) : ?>
							<p class="info text-sm font-sans text-gray-500 mb-0"><?php echo $info; ?></p>
						<?php endif; ?>

						<?php if ($tsphoto) :
							echo wp_get_attachment_image($tsphoto, $size);
						endif; ?>

					</div>
				</div> <!-- Ends .card -->

			<?php
			// End loop.
			endwhile; ?>



		<?php

		// No value.
		else :
		// Do something...
		endif; ?>
	</div> <!-- ts-wrapper -->
	<!-- Next/prev buttons -->
	<a class="prev">&#10094;</a>
	<a class="next">&#10095;</a>

	<!-- Dots/bullets/indicators -->
	<div class="dot-container">
		<?php foreach ($testimonials as $testimonial) : ?>
			<span class="dot"></span>
		<?php endforeach; ?>
	</div>
</div>