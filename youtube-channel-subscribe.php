<?php
/**
 * Plugin Name:       Youtube Channel Subscribe
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Simple plugin to show Youtube Subscribe Button on your WordPress site without leaving the side. It also shows subscribers count.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sajad Hussain
 * Author URI:        https://sajjadcodes.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       youtube-channel-subscribe
 * Domain Path:       /languages
 */

/**
 * exit if file is directly access.
 */ 

 if( ! defined('ABSPATH')) exit;

/**
 *  includes required files
 */


 if( file_exists( dirname(__FILE__) . '/vendor/autoload.php') ) {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
 }


 use Inc\Init;
 use Inc\Base\Activate;
 use Inc\Base\Deactivate;


// require_once plugin_dir_path( __FILE__ ).'includes/Init.php';
// require_once plugin_dir_path( __FILE__ ) . 'includes/Base/Activate.php';
// require_once plugin_dir_path( __FILE__ ) . 'includes/Base/Deactivate.php';

/**
 * This function will run during plugin activation
 */  
function activate_starter_plugin() {
   Activate::activate();
}
register_activation_hook(__FILE__, 'activate_starter_plugin');

/**
 * This function will run during plugin deactivation
 */
function deactivation_starter_plugin() {
    Deactivate::deactivate();
}
register_deactivation_hook(__FILE__,'deactivation_starter_plugin');

/**
 * Initialize all the core classes and register hooks
 */

if ( class_exists('Inc\Init') ) {

    Init::getIncludes();
    Init::registerServices();

}
