<?php
/*
Plugin Name: WP Task Scheduler
Description: A professional MVC-based plugin that allows admins to schedule custom tasks, view logs, and access data via REST API.
Version: 1.0.0
Author: Himan
*/

if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/includes/core/class-autoloader.php';
MyPlugin\Core\Autoloader::register();

use MyPlugin\Controllers\Cron_Controller;
use MyPlugin\Controllers\Api_Controller;
use MyPlugin\Controllers\Dashboard_Controller;
use MyPlugin\Core\Settings;

register_activation_hook(__FILE__, [Cron_Controller::class, 'register']);
register_deactivation_hook(__FILE__, function() {
    wp_clear_scheduled_hook('myplugin_cron_hook');
});

add_action('init', [Cron_Controller::class, 'maybe_run']);
add_action('rest_api_init', [Api_Controller::class, 'register']);
add_action('admin_menu', [Dashboard_Controller::class, 'add_menu']);
add_action('admin_init', [Settings::class, 'register']);
