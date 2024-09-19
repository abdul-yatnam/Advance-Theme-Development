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

        Menus::get_instance();
        
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
        // Enable support for the <title> tag in the head section of the theme
        add_theme_support('title-tag');

        // Enable support for a custom logo feature, allowing users to upload and display a logo
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],  // The IDs of the elements to style with the logo
            'height' => 40,                                    // Maximum height of the logo
            'width' => 60,                                     // Maximum width of the logo
            'flex-height' => true,                             // Allow flexible height for the logo
            'flex-width' => true,                              // Allow flexible width for the logo
            'unlink-homepage-logo' => true,                   // Unlink the logo on the homepage
        ]);

        // Enable support for custom backgrounds, allowing users to set a background color or image
        add_theme_support('custom-background', [
            'default-color' => '0000ff',                       // Default background color (in hex)
            'default-image' => '',                              // Default background image
        ]);

        // Enable support for featured images (post thumbnails) in the theme
        add_theme_support('post-thumbnails');

        // Enable selective refresh for widgets in the customizer, improving user experience
        add_theme_support('customize-selective-refresh-widgets');

        // Enable support for automatic feeds (RSS feed links) in the theme
        add_theme_support('automatic-feed-links');

        // Enable support for HTML5 markup for specific elements to improve markup quality and accessibility
        add_theme_support('html5', [
            'search-form',    // Search form
            'comment-form',   // Comment form
            'comment-list',   // Comment list
            'gallery',        // Gallery
            'caption',        // Captions for images
            'script',         // Scripts
            'style',          // Styles
        ]);

        // Add an editor style stylesheet for the block editor
        add_editor_style();

        // Enable support for block styles for compatibility with block-based themes
        add_theme_support('wp-block-style');

        // Enable support for wide alignment options in Gutenberg blocks
        add_theme_support('align-wide');

        // Set the global content width for media elements
        global $content_width;
        if ( !isset($content_width)) {
            $content_width = 1240; // Maximum content width in pixels
        }


    }


}