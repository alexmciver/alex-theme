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
// Enabling HTML5 support
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));


// Add custom menu support
function your_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'your-theme-text-domain'),
        'secondary-menu' => __('Secondary Menu', 'your-theme-text-domain'),
    ));
}
add_action('after_setup_theme', 'your_theme_register_menus');

//Register ACF Blocks

function my_acf_block_init() {
    // Check if the function exists to avoid errors.
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name' => 'hero-block',
            'title' => __('This is my first Block'),
            'description' => __('This is a custom block created using ACF.'),
            'render_template' => 'template-parts/hero-block.php',
        ));
    }
}
add_action('acf/init', 'my_acf_block_init');



?>
