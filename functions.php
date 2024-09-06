<?php

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    wp_enqueue_style('alex-theme-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

    wp_enqueue_script('alex-theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');
// Add theme support for WP Block styles
add_theme_support("wp-block-styles");
// Add support for responsive embeds 
add_theme_support("responsive-embeds");
// Add support for HTML5 
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

// Add custom menu support
function alex_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'alex-theme'),
        'secondary-menu' => __('Secondary Menu', 'alex-theme'),
    ));
}
add_action('after_setup_theme', 'alex_theme_setup');

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
    return array_merge(
        array(
            array(
                'slug' => 'alex-blocks',
                'title' => __('Blocks by Alex', 'alex-theme'),
            ),
        ),
        $categories
    );
}

//GZIP Compression 
function enable_gzip_compression() {
    if (!ob_start("ob_gzhandler")) ob_start();
}
add_action('init', 'enable_gzip_compression');





?>