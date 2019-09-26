<?php

function premium_style() {
   
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('template', get_template_directory_uri().'/css/template.css', array(),  '1.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());


    wp_enqueue_script('bootstrap_JS', get_template_directory_uri(). '/css/js/bootstrap.min.js', array(), '4.1.3', true);


}
add_action('wp_enqueue_scripts', 'premium_style');



function theme_setup(){
    register_nav_menus (
        array (
            'top_menu' => 'Top Menu',
        )
    );
    $size = array (
        'width'=>'1950',
        'height' => '500'
    );
    add_image_size( 'thumb', '20', '20', true );
    add_theme_support( 'custom-header', $size );
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'post-formats', array( 'video', 'image') );
}
add_action( 'after_setup_theme', 'theme_setup' );

function premiumwp_widget(){
   register_sidebar(array(
    'name' => 'sidebar blog',
    'id' => 'sidebar_blog',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'

   ));
   $sidebar = array(
       'name' => 'Sidebar Home',
       'id' => 'sidebar_home',
       'before_widget' => '<div class="widget-wrapper">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="widget-title">',
       'after_title' => '</h2>'
   );
   register_sidebar($sidebar);
}
add_action('widgets_init', 'premiumwp_widget');