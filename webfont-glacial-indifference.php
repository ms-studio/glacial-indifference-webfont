<?php
/*
Plugin Name: Webfont Glacial Indifference
Plugin URI: https://github.com/ms-studio/webfont-glacial-indifference
Description: Extension permettant de charger la fonte Glacial Indifference.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/ms-studio/webfont-glacial-indifference
*/
 
function load_glacial_indifference() {
	
	wp_enqueue_style( 'aileron-font', plugin_dir_url( __FILE__ ).'aileron/webfont.css' );
        
}
add_action( 'wp_enqueue_scripts', 'load_glacial_indifference', 11 );