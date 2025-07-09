<?php
namespace MyPlugin\Controllers;

use MyPlugin\Core\Logger;

class Cron_Controller {
    public static function register() {
        if (!wp_next_scheduled('myplugin_cron_hook')) {
            wp_schedule_event(time(), 'hourly', 'myplugin_cron_hook');
        }
        add_action('myplugin_cron_hook', [__CLASS__, 'run']);
    }

    public static function maybe_run() {
        // Optional manual execution if needed
    }

    public static function run() {
        Logger::log('Cron Task Executed: ' . current_time('mysql'));
    }
}
