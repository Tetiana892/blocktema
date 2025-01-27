<?php

/**
 * Plugin Name:       Tati Blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Tetiana Onyshchenko
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tati-blocks
 *
 * @package CreateBlock
 */

if (! defined('ABSPATH')) {
	exit;
}

function tati_register_metabox()
{
	register_post_meta('post', '_meta_field_title_one', array(
		'show_in_rest' => true,
		'type' => 'string',
		'single' => true,
		'sanitize_callback' => 'sanitize_text_field',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
}
add_action('init', 'tati_register_metabox');

function create_block_tati_blocks_block_init()
{
	// Убедитесь, что пути к сборкам верные
	register_block_type(__DIR__ . '/build/tati-blocks');
	register_block_type(__DIR__ . '/build/block-field');
	register_block_type(__DIR__ . '/build/block-meta');
}
add_action('init', 'create_block_tati_blocks_block_init');
