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

// Enable featured images

add_theme_support('post-thumbnails');

// Enable page excerpt

add_post_type_support('page', 'excerpt');

function create_custom_post_type() {
  $post_type_name = 'adoption';
  $post_type_options = [
    'labels' => [
      'name' => __('Adoptions'),
      'singular_name' => __('Adoption')
    ],
    'public' => true,
    'has_archive' => true,
    'post-thumbnails' => true,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'summary' )
  ];
  register_post_type($post_type_name, $post_type_options);
};
  add_action('init', 'create_custom_post_type');


function theme_support_options() {
  $defaults = array(
        'flex-height' => true,
        'flex-width' => true,
  );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'theme_support_options' );

// function get_theme_menu($menu_name) {
//     // Get menu items as a flat arrays
//     $locations = get_nav_menu_locations();
//     // If menu doesn't exist, let's just return an empty array
//     if (!isset($locations[$menu_name])) {
//       return [];
//     }
//     $menu = wp_get_nav_menu_object($locations[$menu_name]);
//     $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
//     return $menu_items;
// }

?>