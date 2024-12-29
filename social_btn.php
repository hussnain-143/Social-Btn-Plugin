<?php
/**
 * Plugin Name: Social Buttons
 * Plugin URI: http://www.example.com
 * Description: Plugin to add social buttons to your website.
 * Version: 1.0
 * Author: Team Six
 * Author URI: http://www.example.com
 */

// Security to avoid direct access
if (!defined('WPINC')) {
    die;
}

// Define constants for plugin path and URL
define('SB_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SB_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Include plugin files
require_once SB_PLUGIN_PATH . 'includes/enqueue-scripts.php';
require_once SB_PLUGIN_PATH . 'includes/admin-menu.php';
require_once SB_PLUGIN_PATH . 'includes/settings-page.php';
require_once SB_PLUGIN_PATH . 'includes/social-buttons.php';
