<?php
if (!defined('ABSPATH')) {
  exit; // Prevent access directly
}

// Create id attribute allowing for custom "anchor" value.
$id = 'oeg_hero-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'oeg_hero';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$hero_img = get_field('media_img');
$hero_color = get_field('bg_color') ?: '#153ca4';
$hero_title = get_field('mt_title') ?: 'A Whale\'s Tale';
$hero_desc = get_field('mt_description') ?: '<div class="hero-desc"><p>As for me, I am tormented with an everlasting itch for things remote. I love to sail forbidden seas, and land on barbarous coasts.</p></div>';
$hero_link = get_field('mt_link');
$toggle_w = get_field('full_toggle');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> 
<?php if ($toggle_w) : echo 'oeg_full';
endif; ?>" style="background-color: <?php echo $hero_color; ?>; 
<?php if ($hero_img) : ?>
background-image: url('<?= $hero_img; ?>');
<?php endif; ?>
">

  <div class="container">
    <div class="media-box font-sans">
      <h2 class="hero-title text-gray-100"><?php echo $hero_title; ?></h2>
      <div class="hero-desc font-sans text-gray-100 text-base"><?php echo $hero_desc; ?></div>
      <?php if ($hero_link) : ?>
        <?php $link_target = $hero_link['target'] ? $hero_link['target'] : '_self'; ?>
        <a href="<?= $hero_link['url']; ?>" class="hero-link shadow-sm" title="<?= $hero_link['title']; ?>" target="<?= $link_target; ?>"><?= $hero_link['title']; ?> <svg width="7" height="10" viewBox="0 0 7 10">
            <path fill="currentColor" d="M1.83832 0L6.69269 5L1.83832 10L0.692688 8.82L4.42084 5L0.692688 1.18L1.83832 0Z" fill="#333333" />
          </svg>
        </a>
      <?php endif; ?>
    </div>
  </div>

</div>