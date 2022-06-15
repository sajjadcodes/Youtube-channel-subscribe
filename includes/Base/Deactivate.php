<?php

/**
 * @package Starter-plugin
 * @author Sajad Hussain <sajjadcodes@gmail.com>
 * 
 */

 namespace Inc\Base;

 class Deactivate 
 {
     public static function deactivate() {
        flush_rewrite_rules();
     }
 }