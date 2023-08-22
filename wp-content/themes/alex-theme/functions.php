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
function alex_register_acf_blocks() {
    $block_templates = array(
        'blog-posts-block',
        'call-to-action-block',
        'contact-block',
        'countdown-block',
        'faq-block',
        'feature-block',
        'hero-block',
        'image-gallery-block',
        'map-block',
        'portfolio-block',
        'services-block',
        'social-media-block',
        'team-members-block',
        'testimonial-block',
    );

    foreach ($block_templates as $template) {
        register_block_type(get_template_directory() . '/template-parts/' . $template);
    }
}
add_action('acf/init', 'alex_register_acf_blocks');


// Custom block category show correctly
add_filter( 'block_categories_all', 'alex_block_category' );

function alex_block_category( $categories ) {
    $new_category = array(
        'alex-blocks' => array(
            'slug'  => 'alex-blocks',
            'title' => 'Blocks by Alex'
        )
    );

    $position = 1; // Place the custom category at the top

    // Splice the new category into the categories array at the desired position
    array_splice( $categories, $position, 0, $new_category );

    return $categories;
}




?>
