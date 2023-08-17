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
      register_block_type(get_template_directory() . '/template-parts/blog-posts-block');
      register_block_type(get_template_directory() . '/template-parts/call-to-action-block');
      register_block_type(get_template_directory() . '/template-parts/contact-block');
      register_block_type(get_template_directory() . '/template-parts/countdown-block');
      register_block_type(get_template_directory() . '/template-parts/faq-block');
      register_block_type(get_template_directory() . '/template-parts/feature-block');
      register_block_type(get_template_directory() . '/template-parts/hero-block');
      register_block_type(get_template_directory() . '/template-parts/image-gallery-block');
      register_block_type(get_template_directory() . '/template-parts/map-block');
      register_block_type(get_template_directory() . '/template-parts/portfolio-block');
      register_block_type(get_template_directory() . '/template-parts/services-block');
      register_block_type(get_template_directory() . '/template-parts/social-media-block');
      register_block_type(get_template_directory() . '/template-parts/team-members-block');
      register_block_type(get_template_directory() . '/template-parts/testimonial-block');
  }
}
add_action('acf/init', 'alex_register_acf_blocks');



?>
