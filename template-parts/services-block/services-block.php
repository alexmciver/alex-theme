<div class="services-block">
 <div class="container">
  <h1>Services block</h1>
  <div class="services-flexbox">
   <?php if (have_rows('services_block_content')) : ?>
   <?php while (have_rows('services_block_content')) : the_row(); ?>
   <div class="column">
    <?php
      $service_image = get_sub_field('service_image');
      $service_image_alt_tag = get_sub_field('service_image_alt_tag');
      $service_title = get_sub_field('service_title');
      $service_text = get_sub_field('service_text');
      $service_button_link = get_sub_field('service_button_link');
      $service_button_colour = get_sub_field('service_button_colour');
      $service_button_text_colour = get_sub_field('service_button_text_colour');
      $service_button_text = get_sub_field('service_button_text');
     ?>
    <div class="services-content">
     <img src="<?php echo esc_html($service_image); ?>" alt="<?php echo esc_attr($service_image_alt_tag); ?>">
     <h3><?php echo esc_html($service_title); ?></h3>
     <p><?php echo esc_html($service_text); ?></p>
     <a href="<?php echo esc_url($service_button_link); ?>" class="service-button"
      style="background-color:<?php echo esc_attr($service_button_colour); ?>; color:<?php echo esc_attr($service_button_text_colour); ?>"><?php echo esc_html($service_button_text); ?></a>
    </div>
   </div>
   <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>
</div>