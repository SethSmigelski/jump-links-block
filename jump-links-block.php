<?php
/**
 * Plugin Name:       Jump Links Block (SEO 44)
 * Plugin URI:        https://www.sethcreates.com/plugins-for-wordpress/jump-links-block-seo-44/
 * Description:       A standalone custom block for automatically creating a customizable Jump Links table of contents.
 * Version:           2.1.1
 * Author:            Seth Smigelski
 * Author URI:  	    https://www.sethcreates.com/plugins-for-wordpress/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jump-links-block-seo-44
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

/**
 * Passes translatable strings to the front-end view.js script.
 */
if ( ! function_exists('seo44_jump_links_localize_script') ) {
// Conflict Safety Check	
	function seo44_jump_links_localize_script() {
		// The script handle is generated from your block.json 'name' (seo44/jump-links)
		// It becomes 'seo44-jump-links-view-script'
		$handle = 'seo44-jump-links-view-script';

		// Only localize if the script is actually enqueued
		if ( wp_script_is( $handle, 'enqueued' ) ) {
			wp_localize_script( $handle, 'seo44JumpLinksL10n', [
				'showMore' => __( 'Show More', 'jump-links-block-seo-44' ),
				'showLess' => __( 'Show Less', 'jump-links-block-seo-44' ),
			] );
		}
	}
	// Use a late priority (20) to ensure the script is enqueued first
	add_action( 'wp_enqueue_scripts', 'seo44_jump_links_localize_script', 20 );
} 
