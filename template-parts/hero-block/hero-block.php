<?php
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_background_image = get_field('hero_background_image');
$hero_title_colour = get_field('hero_title_colour');
$hero_description_colour = get_field('hero_description_colour');
?>

<div class="hero" style="background-image:url('<?php echo esc_url($hero_background_image); ?>');">
 <div class=" container">
  <div class="hero-content">
   <h1 style="color:<?php echo esc_attr($hero_title_colour); ?>;"><?php echo esc_html($hero_title); ?></h1>
   <p style="color:<?php echo esc_attr($hero_description_colour); ?>;"><?php echo esc_html($hero_description); ?></p>
   <div class="button-container">
    <?php if (have_rows('hero_buttons')) : ?>
    <?php while (have_rows('hero_buttons')) : the_row(); ?>
    <?php
      $button_url = get_sub_field('button_url');
      $button_text = get_sub_field('button_text');
      $button_background_colour = get_sub_field('button_background_colour');
      $button_text_colour = get_sub_field('button_text_colour');
    ?>
    <a href="<?php echo esc_url($button_url); ?>" class="button"
     style="background-color: <?php echo esc_attr($button_background_colour); ?>; color: <?php echo esc_attr($button_text_colour); ?>;">
     <?php echo esc_html($button_text); ?>
    </a>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
  </div>
 </div>
</div>