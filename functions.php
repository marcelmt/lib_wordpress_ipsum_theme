<?php
/* -----------
 * CSS
 * ----------- */
function resources() {
	wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
	wp_enqueue_style('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome-5', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css');
	wp_enqueue_style('style', get_stylesheet_uri());
}


/* -----------
 * JS
 * ----------- */
wp_enqueue_script(
    'jquery-cdn', 
    '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
    array(), 
    '1.9.1', 
    true
);

wp_enqueue_script(
    'bootstrap-js', 
    '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',
    array( 'jquery-cdn' ), 
    true
);

wp_enqueue_script( 
    'font-awesome-js', 
    '//kit.fontawesome.com/d115e9f58b.js',
    array('fa-cdn'), 
    true
);

    add_action('wp_enqueue_scripts', 'resources');


/* -----------
 * Theme Params
 * ----------- */
add_theme_support('post-thumbnails');
add_action('init', 'register_nav_menus_on_init');

    function register_nav_menus_on_init() {
    	register_nav_menus(array(
    		'header-menu' => 'Menu > Topo da página',
    		'social-links' => 'Menu > Midias Sociais',
    	));
    }


/* -----------
 * Custom Fields
 * ----------- */
$defaults = array(
    'default-color'          => '#f6f6f6',
/*  'default-image'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''  */ 
);

    add_theme_support('custom-background', $defaults);

require get_template_directory() . '/inc/customizer.php';