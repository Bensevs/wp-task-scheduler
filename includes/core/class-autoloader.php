<?php
namespace MyPlugin\Core;

class Autoloader {
    public static function register() {
        spl_autoload_register(function($class) {
            if (strpos($class, 'MyPlugin\\') !== 0) return;
            $path = plugin_dir_path(__DIR__) . '../' . strtolower(str_replace('\\', '/', substr($class, 9))) . '.php';
            if (file_exists($path)) require_once $path;
        });
    }
}
