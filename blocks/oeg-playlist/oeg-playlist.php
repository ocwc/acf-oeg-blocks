<?php

/**
 * Playlist Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'oegplaylist-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'oegplaylist';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$playlist = get_field('playlist') ?: 'Your playlist goes here...';


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <?php

  // Check rows exists.
  if (have_rows('playlist')) :

    $first_row = $playlist[0];
    $first_row_mp3 = $first_row['audio_url'];
  ?>

    <audio id="audio" preload="auto" tabindex="0" controls artist="OEGlobal">
      <source src="<?php echo $first_row_mp3; ?>" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

  <?php

    echo '<ul id="playlist">';

    // Loop through rows.
    while (have_rows('playlist')) : the_row();

      // Load sub field value.
      $audioUrl = get_sub_field('audio_url');
      $audioTitle = get_sub_field('audio_title') ?: 'Audio name';

      // Do something...
      echo '<li class="card text-sm font-sans">';
      echo '<a href="' . $audioUrl . '">' . $audioTitle . '</a>';
      echo '</li>';

    // End loop.
    endwhile;

    echo '</ul>';

  // No value.
  else :
    // Do something...
    echo 'No audio urls found in playlist';

  endif;
  ?>
</div>