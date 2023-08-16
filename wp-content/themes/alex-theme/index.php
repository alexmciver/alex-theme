<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
             wp_nav_menu(array(
            'theme_location' => 'primary-menu', // Use the menu location you registered
            'menu_class' => 'your-menu-class', // Add a custom CSS class to the menu
            ));
            ?>
        </nav>
    </header>
    
    <main id="content" role="main">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </main>
    
    <?php get_footer(); ?>
    
</body>
</html>
