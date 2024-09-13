<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */

// echo '<pre>';
// print_r(get_stylesheet_uri());
// wp_die();


// Used for time stamp (newest version of theme can Identified using the time stamp);
// We can see the timestamp changing when ever the we done any updation on styles.
// echo '<pre>';
// print_r(filemtime(get_template_directory() . '/style.css'));
// wp_die();


function aquila_enqueue_scripts()
{
    // wp_enqueue_style('main-css', get_template_directory_uri() . '/main.css', ['stylesheet']  );
//     wp_enqueue_style('stylesheet', get_stylesheet_uri()  );
    // wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js',[], filemtime(get_template_directory() . '/assets/main.js'), true); 
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js',[],filemtime(get_template_directory() . '/assets/main.js'), true);

    wp_register_style('style-css',get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    // if(is_archive()){
        // wp_enqueue_style('style-css');
    // }
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');