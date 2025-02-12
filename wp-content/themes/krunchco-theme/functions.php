<?php
function krunchco_enqueue_scripts() {
    wp_enqueue_style('krunchco-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'krunchco_enqueue_scripts');


?>
