<?php
/**
 * Plugin Name: My New Gutenberg Block
 * Description: A custom Gutenberg block with enhanced functionality.
 * Version: 1.0.0
 * Author: Rosanna
 * Text Domain: my-new-gutenberg-block
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hook into the 'init' action to register our custom Gutenberg block
function my_new_gutenberg_block_register () {
    // Register the block script with WordPress
    wp_register_script(
        'my-new-gutenberg-block-js',  // Handle for the script
        plugin_dir_url( __FILE__ ) . 'build/index.js',  // Path to the JavaScript file
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),  // Dependencies
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )  // Version (based on file modification time)
    );

    // Register the block type with WordPress
    register_block_type( 'my-new-gutenberg/block', array(  // Updated block name
        'editor_script' => 'my-new-gutenberg-block-js',  // This should match the handle used for the script
    ) );
}

add_action( 'init', 'my_new_gutenberg_block_register' );
