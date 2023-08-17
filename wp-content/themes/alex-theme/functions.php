<?php

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'your-theme-style', esc_url( get_template_directory_uri() . '/assets/css/styles.css' ) );

    // Enqueue custom JavaScript
    wp_enqueue_script('your-theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');
// Add support for title tag 
add_theme_support("title-tag");
// Add theme support for WP Block styles
add_theme_support("wp-block-styles");
// Add support for responsive embeds 
add_theme_support("responsive-embeds");
// Add support for HTML5 
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

// Add custom menu support
function your_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'alex-theme'),
        'secondary-menu' => __('Secondary Menu', 'alex-theme'),
    ));
}
add_action ('after_setup_theme', 'your_theme_register_menus');


// Registering ACF blocks
if (!function_exists('alex_register_acf_blocks')) {
  function alex_register_acf_blocks() {
      // Hero block
      acf_register_block_type(array(
          'name' => 'custom/hero',
          'title' => __('Hero Block'),
          'render_template' => get_template_directory() . '/template-parts/hero/hero.php',
      ));

      // Text left block
      acf_register_block_type(array(
          'name' => 'custom/text-left',
          'title' => __('Text left Block'),
          'render_template' => get_template_directory() . '/template-parts/text-left/text-left.php',
      ));
  }
}
add_action('acf/init', 'alex_register_acf_blocks');



?>
