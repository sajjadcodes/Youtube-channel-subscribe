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

class Menu
{
    
    public $active_tab;

    public function register() {

        add_action( 'admin_menu', array($this, 'register_menu_page') );
          
    
    }
    
    public function register_menu_page(){
        add_menu_page( 
            __( 'My Youtube Channel', 'youtube-channel-subscribe' ),
            'My Youtube Channel',
            'manage_options',
            'youtube-channel-subscribe',
            array($this,'youtube_channel_subscribe_setting_page_html'),
            'dashicons-youtube',
            100
        ); 
    }

    public function youtube_channel_subscribe_setting_page_html() {

        echo "Youtube channel subscribe settings";
    }
    function my_progress_bar_setting_page_html() {

        if (!current_user_can('manage_options')) return; ?>

        <form method="post" action="options.php">
        <div class="wrap">     
            <h1 class="mpb-title"><?php echo esc_html(get_admin_page_title()); ?></h1>
            <?php settings_errors(); ?>
            <?php
                
                if( isset( $_GET[ 'tab' ] ) ) {
                    $this->active_tab = esc_attr( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'setting-options';
                
                } // end if
            ?>
            <nav class="nav-tab-wrapper wp-clearfix" aria-label="my progress bar setting menu">
                <a href="?page=my-progress-bar&tab=setting-options" class="nav-tab <?php echo $this->active_tab == 'setting-options' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Options','read-bar');?></a>
                <a href="?page=my-progress-bar&tab=about" class="nav-tab <?php echo $this->active_tab == 'about' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'About','read-bar');?></a>
            </nav>
        
            <form method="post" action="options.php">
                <?php if($active_tab == 'about') {
                      echo "<div class='my-progress-bar-tab'></div>";
                      echo"<p>A Quick guide of to use set My Progress Bar</p>";
                      echo"<ol>";
                          echo"<li>Go to the Settings</li>";
                          echo"<li>Choice Background and Foreground</li>";
                          echo"<li>Set Thickness and position</li>";
                          echo"<li>Select the template</li>";
                      echo"</ol>";
                      echo "</div>";
                   
                }
              else{
                    settings_fields( 'my-progress-bar' ); 
                    do_settings_sections( 'my-progress-bar' );
                    submit_button('Apply Changes');
                }
                ?>
            </form>
        
    </div><!-- /.wrap -->
        <?php     
    }

}