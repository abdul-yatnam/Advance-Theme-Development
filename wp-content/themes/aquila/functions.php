<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */



// Define AQUILA_DIR_PATH before using it.
if (!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('AQUILA_DIR_URI')){
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


// Require the autoloader file.
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

// Initialize the theme instance

function aquila_get_theme_instance() {
	\AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts()
{   

}
