<?php
/*
Plugin Name: OEGlobal Custom Blocks
Description: Customize content with this block for featured content.
Version: 1.0.1
Author: Mario Badilla

OEGlobal Custom Blocks is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

OEGlobal Custom Blocks is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with OEGlobal Custom Blocks. If not, see <https://www.gnu.org/licenses/>.
*/

if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'group_60f79414a135f',
    'title' => 'Featured content',
    'fields' => array(
      array(
        'key' => 'field_60fa313db50d9',
        'label' => 'Block header',
        'name' => 'block_header',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => 150,
      ),
      array(
        'key' => 'field_60fa2d1adc807',
        'label' => 'Featured item',
        'name' => 'featured_item',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 2,
        'max' => 3,
        'layout' => 'block',
        'button_label' => '',
        'sub_fields' => array(
          array(
            'key' => 'field_60f794e192a94',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => 'The title of the featured content.',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '100',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 140,
          ),
          array(
            'key' => 'field_60fa2d803d5ad',
            'label' => 'Image',
            'name' => 'img',
            'type' => 'image',
            'instructions' => 'Recommended size is 1600x1080 px.
  We suggest not to use images with text, as it might be cropped or blocked.',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => 800,
            'min_height' => '',
            'min_size' => '',
            'max_width' => 3000,
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'png,jpg',
          ),
          array(
            'key' => 'field_60fa2d803d5ae',
            'label' => 'Link',
            'name' => 'link',
            'type' => 'link',
            'instructions' => 'The link can be an internal page or external url',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/featured',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_6100a1b1b8db0',
    'title' => 'OEG Media and text with a link',
    'fields' => array(
      array(
        'key' => 'field_6100a21101fcf',
        'label' => 'Title',
        'name' => 'mt_title',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Write a title for this block',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6100a23401fd0',
        'label' => 'Description',
        'name' => 'mt_description',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => 250,
        'rows' => 3,
        'new_lines' => 'wpautop',
      ),
      array(
        'key' => 'field_6100a1c101fce',
        'label' => 'Background image',
        'name' => 'media_img',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'min_width' => 1200,
        'min_height' => '',
        'min_size' => '',
        'max_width' => 3000,
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_6100a26d20eab',
        'label' => 'Link',
        'name' => 'mt_link',
        'type' => 'link',
        'instructions' => 'Choose a page link or paste the URL (optional)',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
      ),
      array(
        'key' => 'field_61046c173434a',
        'label' => 'Background color',
        'name' => 'bg_color',
        'type' => 'color_picker',
        'instructions' => 'Choose a color for the background if not using an image.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '#153ca4',
      ),
      array(
        'key' => 'field_6104943a2488d',
        'label' => 'Full Width Toggle',
        'name' => 'full_toggle',
        'type' => 'true_false',
        'instructions' => 'Choose if this block is going to be full-screen width or contained inside the content area.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Full Width',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/oeg-hero-banner',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_610b595988896',
    'title' => 'Personas',
    'fields' => array(
      array(
        'key' => 'field_610b5a715baa0',
        'label' => 'Personas',
        'name' => 'personas',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 1,
        'max' => 0,
        'layout' => 'table',
        'button_label' => '',
        'sub_fields' => array(
          array(
            'key' => 'field_610b596b00856',
            'label' => 'Photo',
            'name' => 'photo',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '20',
              'class' => 'editor-pic',
              'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => 600,
            'min_height' => '',
            'min_size' => '',
            'max_width' => 1200,
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
          array(
            'key' => 'field_611348e09e454',
            'label' => 'Information',
            'name' => 'lines',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_610b5ab75baa1',
                'label' => 'Line 1',
                'name' => 'line1',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => 'line1',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Example: Ale José Yunuen',
                'prepend' => '',
                'append' => '',
                'maxlength' => 140,
              ),
              array(
                'key' => 'field_610b5f9bc7ebf',
                'label' => 'Line 2',
                'name' => 'line2',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_610b5ab75baa1',
                      'operator' => '!=empty',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Example: Collection Development Librarian',
                'prepend' => '',
                'append' => '',
                'maxlength' => 140,
              ),
              array(
                'key' => 'field_61109bbe789ff',
                'label' => 'Line 3',
                'name' => 'line3',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_610b5f9bc7ebf',
                      'operator' => '!=empty',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Example: United Kingdom',
                'prepend' => '',
                'append' => '',
                'maxlength' => 140,
              ),
            ),
          ),
          array(
            'key' => 'field_61109c5ce400f',
            'label' => 'Link',
            'name' => 'profile_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/oeg-people-grid',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

endif;

function mab_register_acf_block_types()
{
  // Register featured content block (happening now)
  acf_register_block_type([
    'name'            => 'featured',
    'title'           => __('OEG Featured content'),
    'description'     => __('My Featured content block.'),
    'render_template' => dirname(__file__) . '/blocks/featured/featured.php',
    'category'        => 'design',
    'icon'            => '<svg viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M10.5 22.5C9.6722 22.5 9.00001 21.8259 9.00001 20.9986H7.50001C7.50001 22.6538 8.84626 24 10.5 24C12.1538 24 13.5 22.6538 13.5 20.9986H12C12 21.8259 11.3278 22.5 10.5 22.5ZM20.3147 15.6942C19.0041 14.4464 18.0019 13.1405 18.0019 8.71406C18.0019 4.98328 15.0305 1.94062 11.25 1.57266V0.75C11.25 0.335625 10.9144 0 10.5 0C10.0856 0 9.75001 0.335625 9.75001 0.75V1.57313C5.96954 1.94109 2.99814 4.98328 2.99814 8.71406C2.99814 13.14 1.99548 14.4464 0.684854 15.6942C0.0300106 16.3177 -0.176708 17.2603 0.157511 18.0956C0.498761 18.9488 1.32001 19.5 2.25001 19.5H18.75C19.68 19.5 20.5013 18.9483 20.8425 18.0952C21.1767 17.2598 20.9695 16.3177 20.3147 15.6942V15.6942ZM18.75 18H2.25001C1.58298 18 1.2497 17.228 1.71939 16.7808C3.35345 15.225 4.49814 13.4836 4.49814 8.71453C4.49814 5.55609 7.18267 3 10.5 3C13.8169 3 16.5019 5.55562 16.5019 8.71406C16.5019 13.4648 17.6367 15.2156 19.2806 16.7803C19.7522 17.2298 19.4142 18 18.75 18Z"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/featured/featured.css',
  ]);
  // Register Media text and link Block
  acf_register_block_type([
    'name'            => 'oeg-hero-banner',
    'title'           => __('OEG Hero Banner'),
    'description'     => __('A block with media, text & a button'),
    'render_template' => dirname(__file__) . '/blocks/oeg-hero/oeg-hero.php',
    'category'        => 'design',
    'icon'            => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M23 8.96719C21.75 9.25781 18.1833 9.55312 12.1375 5.98594C8.5125 3.84375 5.55 3.55781 3.3875 3.86719C3.7625 3.45469 4 2.88281 4 2.25C4 1.00781 3.10417 0 2 0C0.895833 0 0 1.00781 0 2.25C0 3.225 0.558333 4.05 1.33333 4.36406V23.625C1.33333 23.8313 1.48333 24 1.66667 24H2.33333C2.51667 24 2.66667 23.8313 2.66667 23.625V19.8937C4.34167 18.6187 6.91667 17.25 10.1458 17.0719C11.3417 17.0063 13.3125 16.8 15.8917 16.1906C16.075 16.1484 20.45 15.075 23.8083 10.4859C24.3 9.81562 23.7792 8.78906 23 8.96719V8.96719ZM2 1.5C2.36667 1.5 2.66667 1.8375 2.66667 2.25C2.66667 2.6625 2.36667 3 2 3C1.63333 3 1.33333 2.6625 1.33333 2.25C1.33333 1.8375 1.63333 1.5 2 1.5ZM15.6208 14.7234C13.125 15.3094 11.2292 15.5109 10.0792 15.5766C6.54583 15.7734 4.025 17.2219 2.66667 18.1172V5.51719C4.63333 5.02031 7.64583 5.025 11.5167 7.3125C16.4708 10.2375 19.9458 10.7062 21.9125 10.6125C19.0167 13.8797 15.6583 14.7141 15.6208 14.7234Z"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-hero/oeg-hero.css',
  ]);
  // Register People Gallery Block
  acf_register_block_type([
    'name'            => 'oeg-people-grid',
    'title'           => __('OEG Grid of People'),
    'description'     => __('A repeater block of people cards.'),
    'render_template' => dirname(__file__) . '/blocks/oeg-people/oeg-people.php',
    'category'        => 'design',
    'icon'            => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C5.37097 0 0 5.37097 0 12C0 18.629 5.37097 24 12 24C18.629 24 24 18.629 24 12C24 5.37097 18.629 0 12 0ZM18.1935 20.4C16.4565 21.6823 14.3177 22.4516 12 22.4516C9.68226 22.4516 7.54355 21.6823 5.80645 20.4V19.7419C5.80645 18.0339 7.19516 16.6452 8.90323 16.6452C9.44032 16.6452 10.2339 17.1968 12 17.1968C13.771 17.1968 14.5548 16.6452 15.0968 16.6452C16.8048 16.6452 18.1935 18.0339 18.1935 19.7419V20.4ZM19.6742 19.0694C19.3452 16.8242 17.4339 15.0968 15.0968 15.0968C14.1048 15.0968 13.6258 15.6484 12 15.6484C10.3742 15.6484 9.9 15.0968 8.90323 15.0968C6.56613 15.0968 4.65484 16.8242 4.32581 19.0694C2.60806 17.2065 1.54839 14.729 1.54839 12C1.54839 6.2371 6.2371 1.54839 12 1.54839C17.7629 1.54839 22.4516 6.2371 22.4516 12C22.4516 14.729 21.3919 17.2065 19.6742 19.0694ZM12 5.41935C9.64839 5.41935 7.74194 7.32581 7.74194 9.67742C7.74194 12.029 9.64839 13.9355 12 13.9355C14.3516 13.9355 16.2581 12.029 16.2581 9.67742C16.2581 7.32581 14.3516 5.41935 12 5.41935ZM12 12.3871C10.5048 12.3871 9.29032 11.1726 9.29032 9.67742C9.29032 8.18226 10.5048 6.96774 12 6.96774C13.4952 6.96774 14.7097 8.18226 14.7097 9.67742C14.7097 11.1726 13.4952 12.3871 12 12.3871Z" fill="black"/></svg>',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-people/oeg-people.css',
  ]);
}

if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'mab_register_acf_block_types');
}
