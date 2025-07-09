<?php
namespace MyPlugin\Core;

class Settings {
    public static function register() {
        register_setting('myplugin_options_group', 'myplugin_option');
        add_settings_section('myplugin_main_section', 'Main Settings', '__return_false', 'myplugin');
        add_settings_field('myplugin_option', 'Option', [__CLASS__, 'render_field'], 'myplugin', 'myplugin_main_section');
    }

    public static function render_field() {
        $value = esc_attr(get_option('myplugin_option', 'default'));
        echo '<input type="text" name="myplugin_option" value="' . $value . '" />';
    }
}
