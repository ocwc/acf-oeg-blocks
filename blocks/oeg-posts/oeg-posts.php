<?php
if (!defined('ABSPATH')) {
  exit; // Prevent access directly
}

// Create id attribute allowing for custom "anchor" value.
$id = 'postlist-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'postlist';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

  <?php
  // Load values and assign defaults.
  $feat_posts = get_field('post_item');
  $image = get_field('feat_img');
  $date = get_field('date');
  $exc = get_field('excerpt');
  $category = get_field('category');
  $viewToggle = get_field('list_grid');


  if ($feat_posts) : ?>
    <div class="<?php echo $viewToggle; ?>">
      <?php foreach ($feat_posts as $feat_post) :

        $permalink = get_permalink($feat_post->ID);
        $title = get_the_title($feat_post->ID);
        $date = get_field('date');
        $postImg = get_the_post_thumbnail($feat_post->ID, 'medium');
        $excerpt = get_the_excerpt($feat_post->ID);
        $excerpt = substr($excerpt, 0, 140);
        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
        $cats = get_the_category($feat_post->ID);
        $country = get_field('country', $feat_post->ID);
      ?>
        <div class="card post-item-block">
          <a href="<?php echo esc_url($permalink); ?>">
            <?php
            if ($image) :
              if ($postImg) :
                echo '<div class="post-pic">' . $postImg . '</div>';
              else :
                echo '<div class="post-pic"><img src="' . OEGBLOCKS__PLUGIN_URL . 'assets/img/placeholder.png" alt="OEGlobal logo"></div>';
              endif;
            endif;
            ?>
            </a>
            <div class="content inner-card">
              <?php
              if ($category && !empty($cats)) :
                echo '<div class="cats">';
                foreach ($cats as $cat) :
                  echo '<span>' . $cat->name . '</span>';
                endforeach;
                echo '</div>';
              endif;
              ?>
              <h3 class="title"><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h3>

              <?php if ($exc) : ?>
                <p class="excerpt"><?php echo wp_strip_all_tags($result) . '...'; ?></p>
              <?php endif; ?>

              <?php if ($date) : ?>
                <p class="date font-sans"><?php echo get_the_date('F j, Y', $feat_post->ID); ?></p>
              <?php endif; ?>

              <?php if ($country) : ?>
                <p class="meta country font-sans"><?php echo $country; ?></p>
              <?php endif; ?>

            </div>
          
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <p>Choose content posts to be added here.</p>
  <?php endif; ?>
</div>