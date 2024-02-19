<?php

function theme_scripts_and_styles() {
    wp_enqueue_script('meowtopia-main-scripts', get_template_directory_uri() . '/scripts/main.js', [], false, ['in_footer' => true]);

    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

    wp_enqueue_style('meowtopia-main-style', get_template_directory_uri() . '/styles/main.css');

};

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function register_theme_menus() {
    register_nav_menus([
      'primary' => 'Primary Menu',
      'footer' => 'Footer Menu',
      '404-menu' => '404 Menu'
    ]);
};
    
add_action('init', 'register_theme_menus');   

?>