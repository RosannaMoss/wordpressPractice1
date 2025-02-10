<?php
/**
 * Plugin Name: My Gutenberg Block
 * Description: A custom Gutenberg block
 * Version: 1.0.0
 * Author: Rosanna
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Hook into the 'init' action to register our custom Gutenberg block
function my_gutenberg_block_register () {
    // Register the block script with WordPress
    wp_register_script(
        'my-gutenberg-block-js',  // Handle for the script
        plugin_dir_url( __FILE__ ) . 'build/index.js',  // Path to the JavaScript file
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),  // Dependencies
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )  // Version (based on file modification time)
    );

    // Register the block type with WordPress
    register_block_type( 'my-gutenberg/block', array(  // Block name should match JavaScript registration
        'editor_script' => 'my-gutenberg-block-js',  // This should match the handle used for the script
    ) );
}

add_action( 'init', 'my_gutenberg_block_register' );
