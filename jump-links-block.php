<?php
/**
 * Plugin Name:       Jump Links Block (SEO 44)
 * Plugin URI:        https://www.sethcreates.com/plugins-for-wordpress/jump-links-block-seo-44/
 * Description:       A standalone custom block for automatically creating a customizable Jump Links table of contents.
 * Version:           2.2.0
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

/**
 * Prevent the Jump Links CSS from loading globally on every page.
 */
function jump_links_block_dequeue_global_styles() {
    // Only apply this restriction on the front-end
    if ( ! is_admin() ) {
        wp_dequeue_style( 'seo44-jump-links-style' );
    }
}
add_action( 'wp_enqueue_scripts', 'jump_links_block_dequeue_global_styles', 99 );

/**
 * Re-enqueue the CSS *only* when the block is actually rendered on the page.
 */
function jump_links_block_enqueue_styles_on_render( $block_content, $block ) {
    // Check if the block being rendered is our Jump Links block
    if ( isset( $block['blockName'] ) && $block['blockName'] === 'seo44/jump-links' ) {
        wp_enqueue_style( 'seo44-jump-links-style' );
    }
    return $block_content;
}
add_filter( 'render_block', 'jump_links_block_enqueue_styles_on_render', 10, 2 );
