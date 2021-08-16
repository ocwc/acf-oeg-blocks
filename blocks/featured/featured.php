<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'oeg-featured-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'oeg-featured-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$feat_block = get_field('featured_item');
$header = get_field('block_header');
?>

<?php if ($header) : ?>
    <h2 class="featured-block-header text-black-200 border-b border-gray-400 text-xl font-bold font-sans"><?php echo $header; ?></h2>
<?php endif; ?>

<?php $count = (count($feat_block)); ?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> grid grid-rows-auto grid-cols-auto gap-4
        <?php if ($count >= 3) : ?>
        three-items lg:grid-rows-2 lg:grid-cols-3 gap-0 lg:gap-4
        <?php else : ?>
        two-items md:grid-rows-1 md:grid-cols-2 gap-2 md:gap-4
        <?php endif; ?>">
    <?php
    // Check rows exists.
    if (have_rows('featured_item')) :

        // Loop through rows.
        while (have_rows('featured_item')) : the_row();

            // Load sub field value.
            $img = get_sub_field('img');
            $size = 'large';
            $title = get_sub_field('title') ?: 'Add a title';
            $link = get_sub_field('link');
            $linkUrl = $link['url'];
            $linkTitle = $link['title'];
            $index = get_row_index();
            // Do something...
    ?>
            <a href="<?php echo esc_url($linkUrl); ?>" title="<?php echo esc_attr($linkTitle); ?>" class="featured-item h-400px
            <?php if ($count >= 3) : ?>
                <?php if ($index == 1) : ?>
                md:row-span-2 md:col-span-2
                <?php else : ?> 
                col-auto row-auto
                    <?php endif; ?>
          <?php endif; ?>
            ">
                <?php
                if ($img) :
                    echo wp_get_attachment_image($img, $size);
                else :
                    echo '<img src="' . plugin_dir_url(__FILE__) . 'placeholder-image-768x576.png">';
                endif;
                ?>
                <p class="title m-0 font-sans
                 <?php if ($count >= 3) : ?>
                    <?php if ($index >= 2) : ?>
                    md:text-base
                    <?php else : ?> 
                    md:text-2xl
                    <?php endif; ?>
                <?php else : ?>
                    md:text-lg
                <?php endif; ?>
                    ">
                    <?php echo ($title) ?></p>
            </a>

    <?php

        // End loop.
        endwhile;

    // No value.
    else :
    // Do something...
    endif;

    ?>
</div>