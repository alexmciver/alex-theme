<?php

$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');

?>

<div class="hero">
 <div class="container">
  <div class="hero-content">
   <h1><?php echo esc_html($hero_title); ?></h1>
   <p><?php echo esc_html($hero_description); ?></p>
   <div class="button-container">
    <?php if (have_rows('hero_buttons')) : ?>
    <?php while (have_rows('hero_buttons')) : the_row(); ?>
    <a href="<?php echo esc_url($button_url); ?>" class="button"><?php echo esc_html($button_text); ?></a>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
  </div>
 </div>
</div>