<?php
// Enqueue styles and scripts
function sb_add_scripts() {
    wp_enqueue_style('sb-bootstrap', SB_PLUGIN_URL . 'assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('sb-fontawesome', SB_PLUGIN_URL . 'assets/font-awesome/css/all.min.css');
    wp_enqueue_style('sb-style', SB_PLUGIN_URL . 'assets/css/style.css');

    wp_enqueue_script('sb-bootstrap-js', SB_PLUGIN_URL . 'assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('sb-main-js', SB_PLUGIN_URL . 'assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sb_add_scripts');
