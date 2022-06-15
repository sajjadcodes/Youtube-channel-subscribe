<?php

/**
 * @package Starter-plugin
 * @author Sajad Hussain <sajjadcodes@gmail.com>
 * 
 */

namespace Inc\Base;

 class Activate
 {
    public static function activate() {
        	
        add_option( 'myhack_extraction_length', '255', '', 'yes' ); 
        flush_rewrite_rules();
    }
 }