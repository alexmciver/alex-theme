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

      // Blog posts block
      acf_register_block_type(array(
          'name' => 'custom/blog-posts-block',
          'title' => __('Blog Posts Block'),
          'render_template' => get_template_directory() . '/template-parts/blog-posts-block/blog-posts-block.php',
      ));

      // Call to action block
      acf_register_block_type(array(
          'name' => 'custom/call-to-action-block',
          'title' => __('Call to Action Block'),
          'render_template' => get_template_directory() . '/template-parts/call-to-action-block/call-to-action-block.php',
      ));

      // Contact block
      acf_register_block_type(array(
          'name' => 'custom/contact-block',
          'title' => __('Contact Block'),
          'render_template' => get_template_directory() . '/template-parts/contact-block/contact-block.php',
      ));

      // Countdown block
      acf_register_block_type(array(
          'name' => 'custom/countdown-block',
          'title' => __('Countdown Block'),
          'render_template' => get_template_directory() . '/template-parts/countdown-block/countdown-block.php',
      ));

      // FAQ block
      acf_register_block_type(array(
          'name' => 'custom/faq-block',
          'title' => __('FAQ Block'),
          'render_template' => get_template_directory() . '/template-parts/faq-block/faq-block.php',
      ));

      // Feature block
      acf_register_block_type(array(
          'name' => 'custom/feature-block',
          'title' => __('Feature Block'),
          'render_template' => get_template_directory() . '/template-parts/feature-block/feature-block.php',
      ));

      // Hero block
      acf_register_block_type(array(
          'name' => 'custom/hero-block',
          'title' => __('Hero Block'),
          'render_template' => get_template_directory() . '/template-parts/hero-block/hero-block.php',
      ));

      // Image Gallery block
      acf_register_block_type(array(
          'name' => 'custom/image-gallery-block',
          'title' => __('Image Gallery Block'),
          'render_template' => get_template_directory() . '/template-parts/image-gallery-block/image-gallery-block.php',
      ));

      // Map block
      acf_register_block_type(array(
          'name' => 'custom/map-block',
          'title' => __('Map Block'),
          'render_template' => get_template_directory() . '/template-parts/map-block/map-block.php',
      ));

      // Portfolio block
      acf_register_block_type(array(
          'name' => 'custom/portfolio-block',
          'title' => __('Portfolio Block'),
          'render_template' => get_template_directory() . '/template-parts/portfolio-block/portfolio-block.php',
      ));

      // Services block
      acf_register_block_type(array(
          'name' => 'custom/services-block',
          'title' => __('Services Block'),
          'render_template' => get_template_directory() . '/template-parts/services-block/services-block.php',
      ));

      // Social Media block
      acf_register_block_type(array(
          'name' => 'custom/social-media-block',
          'title' => __('Social Media Block'),
          'render_template' => get_template_directory() . '/template-parts/social-media-block/social-media-block.php',
      ));

      // Team Members block
      acf_register_block_type(array(
          'name' => 'custom/team-members-block',
          'title' => __('Team Members Block'),
          'render_template' => get_template_directory() . '/template-parts/team-members-block/team-members-block.php',
      ));

      // Testimonal block
      acf_register_block_type(array(
          'name' => 'custom/testimonial-block',
          'title' => __('Testimonial Block'),
          'render_template' => get_template_directory() . '/template-parts/testimonial-block/testimonial-block.php',
      ));
  }
}
add_action('acf/init', 'alex_register_acf_blocks');



?>
