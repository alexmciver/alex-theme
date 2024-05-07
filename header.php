    <header class="site-header">
     <nav class="site-navigation">
      <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'your-menu-class',
                ) );
                ?>
     </nav>
    </header>