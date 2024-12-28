<?php
// Add admin menu
function sb_menu() {
    add_menu_page(
        'Social Buttons',
        'Social Buttons',
        'manage_options',
        'sb_menu',
        'sb_menu_page',
        'dashicons-share',
        30
    );
}
add_action('admin_menu', 'sb_menu');
