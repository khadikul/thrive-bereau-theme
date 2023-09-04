<?php 

/**
 * 
 * theme main file
 * @package thrive-bureau
 * 
 */


 if(! defined('d_version')){
    // Replace the version number of the theme on each release.
    define('d_version', '1.0.0');
}


function the_mx_setup() {
    load_theme_textdomain( 'thrivebureabu', get_template_directory() .'/languages' );
}

if(! defined('THRIVE_BUREAU_DIR_PATH')){
    define('THRIVE_BUREAU_DIR_PATH', untrailingslashit(get_template_directory() ));
}

if(! defined('THRIVE_BUREAU_DIR_URI')){
    define('THRIVE_BUREAU_DIR_URI', untrailingslashit( get_template_directory_uri() ));
}


require THRIVE_BUREAU_DIR_PATH.'/inc/thrivebureau/autoloader.php';

//Thrive Bureau Traits
\THRIVE_BUREAU\Inc\THRIVE_BUREAU::get_instance();