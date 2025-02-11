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
        'my-new-gutenberg-block-js',
        plugin_dir_url( __FILE__ ) . 'build/index.js',  // Path to the JavaScript file
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
    );

    // Register the block type with WordPress
    register_block_type( 'my-new-gutenberg/block', array(
        'editor_script' => 'my-new-gutenberg-block-js',
        'editor_style'  => 'my-new-gutenberg-block-editor',  // Enqueue style in the editor
        'style'          => 'my-new-gutenberg-block-frontend',  // Enqueue style on the frontend
    ) );
    
    // Enqueue block editor styles
    wp_register_style(
        'my-new-gutenberg-block-editor',
        plugin_dir_url( __FILE__ ) . 'style.css',  // Path to the CSS file for the editor
        array(),
        filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )  // Version (based on file modification time)
    );

    // Enqueue block frontend styles
    wp_register_style(
        'my-new-gutenberg-block-frontend',
        plugin_dir_url( __FILE__ ) . 'style.css',  // Path to the CSS file for the frontend
        array(),
        filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )  // Version (based on file modification time)
    );
}

add_action( 'init', 'my_new_gutenberg_block_register' );
