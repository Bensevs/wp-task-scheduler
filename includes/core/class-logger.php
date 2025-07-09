<?php
namespace MyPlugin\Core;

class Logger {
    public static function log($message) {
        $log_file = plugin_dir_path(__DIR__) . '../../logs/myplugin.log';
        $time = current_time('mysql');
        file_put_contents($log_file, "[$time] $message\n", FILE_APPEND);
    }
}
