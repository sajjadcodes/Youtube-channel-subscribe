<?php

/**
 * @package Starter-plugin
 * @author Sajad Hussain <sajjadcodes@gmail.com>
 * 
 */

namespace Inc\Base;

/**
* 
*/
 class TextDomainLoader
 {

    public function register() {
        add_action('plugins_loaded', array($this,'set_locale'));
    }
    public static function set_locale( ) {
        load_plugin_textdomain( 'starter-plugin', false, plugin_dir_path(__FILE__) . '/languages/');
    }
}