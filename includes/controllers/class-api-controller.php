<?php
namespace MyPlugin\Controllers;

class Api_Controller {
    public static function register() {
        register_rest_route('myplugin/v1', '/logs', [
            'methods' => 'GET',
            'callback' => [__CLASS__, 'get_logs'],
            'permission_callback' => '__return_true'
        ]);
    }

    public static function get_logs() {
        $log_file = plugin_dir_path(__DIR__) . '../logs/myplugin.log';
        $logs = file_exists($log_file) ? file_get_contents($log_file) : 'No logs yet';
        return rest_ensure_response(['logs' => nl2br($logs)]);
    }
}
