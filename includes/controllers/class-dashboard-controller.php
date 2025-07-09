<?php
namespace MyPlugin\Controllers;

class Dashboard_Controller {
    public static function add_menu() {
        add_menu_page('Task Scheduler', 'Task Scheduler', 'manage_options', 'myplugin-dashboard', [__CLASS__, 'render_dashboard'], 'dashicons-schedule');
    }

    public static function render_dashboard() {
        echo '<div class="wrap"><h1>Task Scheduler Dashboard</h1><div id="myplugin-dashboard"></div></div>';
        wp_enqueue_script('myplugin-dashboard-js', plugins_url('../public/js/dashboard.js', __FILE__), ['jquery'], '1.0', true);
        wp_enqueue_style('myplugin-dashboard-css', plugins_url('../public/css/style.css', __FILE__), [], '1.0');
    }
}
