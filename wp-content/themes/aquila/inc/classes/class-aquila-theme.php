<?php
/**
 * Bootstrap the theme
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    // Constructor
    protected function __construct()
    {
        // wp_die("Hello");
        // Load Class.

        Assets::get_instance();
        $this->setup_hooks();
    }


    //  Its protected bcz I don't want any other classes to access it  
    protected function setup_hooks()
    {

        /**
         * Action hooks.
         * 
         */

        add_action('after_setup_theme', [$this, 'setup_theme']);


    }

    public function setup_theme()
    {
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],  
            'height' => 40,
            'width' => 60,
            'flex-height' => true,
            'flex-width' => true,
            'unlink-homepage-logo' => true,
        ]);

    }


}