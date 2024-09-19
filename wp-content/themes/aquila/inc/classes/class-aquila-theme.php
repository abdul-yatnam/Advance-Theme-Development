<?php 
/**
 * Bootstrap the theme
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    // Constructor
    protected function __construct() {
        // wp_die("Hello");
        // Load Class
        $this->set_hooks();
    }
 
  
    //  Its protected bcz I don't want any other classes to access it  
     protected function set_hooks(){
        // Actions and Filter 
     }
 }