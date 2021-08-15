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

function oeg_register_acf_block_types()
{
  // Register featured content block (happening now)
  acf_register_block_type([
    'name'            => 'featured',
    'title'           => __('OEG Featured content'),
    'description'     => __('My Featured content block.'),
    'render_template' => dirname(__file__) . '/blocks/featured/featured.php',
    'category'        => 'design',
    'icon'            => 'embed-post',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/featured/featured.css',
    'mode'            => 'edit',
  ]);
  // Register Media text and link Block
  acf_register_block_type([
    'name'            => 'oeg-hero-banner',
    'title'           => __('OEG Hero Banner'),
    'description'     => __('A block with media, text & a button'),
    'render_template' => dirname(__file__) . '/blocks/oeg-hero/oeg-hero.php',
    'category'        => 'design',
    'icon'            => 'cover-image',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-hero/oeg-hero.css',
    'mode'            => 'edit',
  ]);
  // Register People Gallery Block
  acf_register_block_type([
    'name'            => 'oeg-people-grid',
    'title'           => __('OEG Grid of People'),
    'description'     => __('A repeater block of people cards.'),
    'render_template' => dirname(__file__) . '/blocks/oeg-people/oeg-people.php',
    'category'        => 'design',
    'icon'            => 'networking',
    'enqueue_style'   => plugin_dir_url(__FILE__) . '/blocks/oeg-people/oeg-people.css',
    'mode'            => 'edit',
  ]);
}

if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'oeg_register_acf_block_types');
}

include 'includes/fields.php';
