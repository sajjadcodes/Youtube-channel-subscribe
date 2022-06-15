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

class Enqueue
{
	


	public function register() {

		add_action( 'admin_enqueue_scripts', array( $this, 'StarterEnqueue' ) );
	}
	
	function StarterEnqueue() {
		wp_enqueue_style( 'mypluginstyle', plugin_dir_url( dirname( __FILE__, 2 ) ) . 'admin/css/mystyle.css' );
		wp_enqueue_script( 'mypluginscript', plugin_dir_url( dirname( __FILE__, 2 ) ) . 'admin/js/main.js', array(), $ver='1.0.0', true );
		
	}
}