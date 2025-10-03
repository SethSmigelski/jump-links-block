<?php
/**
 * Plugin Name:       Jump Links Block
 * Plugin URI:        https://www.sethcreates.com/plugins-for-wordpress/seo-jump-links-block/
 * Description:       A standalone custom block for automatically creating a customizable Jump Links table of contents.
 * Version:           1.4
 * Author:            Seth Smigelski
 * Author URI:  	    https://www.sethcreates.com/plugins-for-wordpress/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jump-links-block
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Registers the block type from the `build` folder.
 * This is the guaranteed way to load all assets from block.json, including view.js.
 */
function jump_links_block_register() {
    register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'jump_links_block_register' );
