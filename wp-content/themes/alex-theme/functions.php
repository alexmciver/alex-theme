<?php
// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('your-theme-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue custom JavaScript
    wp_enqueue_script('your-theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');

// Add custom menu support
function your_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'your-theme-text-domain'),
        'secondary-menu' => __('Secondary Menu', 'your-theme-text-domain'),
    ));
}
add_action('after_setup_theme', 'your_theme_register_menus');



//registering ACF blocks
if (!function_exists('alex_register_acf_blocks')) {
  function alex_register_acf_blocks()
  {
      register_block_type(get_template_directory_uri() . '/template-parts/hero-block');
  }
}
add_action('init', __NAMESPACE__ . 'alex_register_acf_blocks', 10, 2);


?>
