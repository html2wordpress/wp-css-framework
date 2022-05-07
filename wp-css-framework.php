<?php
 
/**
 
 * @package wpCssFramework
 
 */
 
/*
 
Plugin Name: wpCssFramework
 
Plugin URI: https://htmltowordpress.xyz/wpcssframework/
 
Description: A light weight CSS framework that provides mobile friendly functionality without the bulk of frameworks like Bootstrap and Foundation. Has a tiny footprint of less that 10 Kb.
 
Version: 1.0.0
 
Author: Lee Miller
 
Author URI: https://htmltowordpress.xyz/
 
License: GPLv2 or later
 
Text Domain: wpcssframework
 
*/

function wpcssframework_styles() {
    wp_enqueue_style( 'wpcssframework',  plugin_dir_url( __FILE__ ) . '/css/wpcssframework.css' );
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,100;1,200;1,400&display=swap');
}
add_action( 'wp_enqueue_scripts', 'wpcssframework_styles' );

