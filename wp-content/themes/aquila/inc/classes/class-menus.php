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


class Menus
{
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

    public function register_menus()
    {

        register_nav_menus([
            'aquila-header-menu' => esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu' => esc_html__('Footer Menu', 'aquila'),

        ]);
    }

    public function get_menu_id($location)
    {
        // Get nav menu locations.
        $locations = get_nav_menu_locations();

        // Get menu id by location
        $menu_id = $locations[$location];



        return !empty($menu_id) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id){

        $child_menus = [];

        if(! empty($menu_array) && is_array($menu_array)){
            foreach ( $menu_array as $menu){

                if (intval( $menu->menu_item_parent) === $parent_id){
                    array_push( $child_menus, $menu );
                }
            }
        }
        return $child_menus;
    }




}