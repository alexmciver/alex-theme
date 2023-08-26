    <header class="site-header">
     <div class="container">
     </div>
     <nav class="site-navigation">
      <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu', // Use the menu location you registered
                    'menu_class'     => 'your-menu-class', // Add a custom CSS class to the menu
                ) );
                ?>
     </nav>
     </div>
    </header>

    <?php wp_head(); ?>