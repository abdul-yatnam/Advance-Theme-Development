<?php
/**
 * 
 * Registering Nav Menus.
 * 
 * @package Aquila
 * 
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;


 class Menus{
    use Singleton;

     // Constructor
     protected function __construct()
     {
         // wp_die("Hello");
         // Load Class
         $this->setup_hooks();
     }
 
 
     //  Its protected bcz I don't want any other classes to access it  
     protected function setup_hooks()
     {
         /**
          * Actions
          */  
         add_action('init', [$this, 'register_menus']);
 
     }

     public function register_menus(){

        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu','aquila'),
            'aquila-footer-menu' => esc_html__('Footer Menu','aquila'),

        ]);
     }
 
     
 
 
 }