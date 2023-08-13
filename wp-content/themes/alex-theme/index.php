<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/styles.css">
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
                // Output your navigation menu here using wp_nav_menu()
            ?>
        </nav>
    </header>
    
    <main id="content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('No posts found.', 'alex-theme'); ?></p>
        <?php endif; ?>
    </main>

    <?php wp_footer(); ?>
</body>
</html>
