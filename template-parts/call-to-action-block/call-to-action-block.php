<?php
$cta_title = get_field('cta_title');
$cta_description = get_field('cta_description');
$cta_button_text = get_field('cta_button_text');
$cta_button_link = get_field('cta_button_link');
$cta_background_colour = get_field('cta_background_colour');
$cta_button_colour = get_field('cta_button_colour');
$cta_button_text_colour = get_field('cta_button_text_colour');
$cta_text_colour = get_field('cta_text_colour');
?>

<div class="call-to-action-block">
 <div class="container">
  <h1>CTA block</h1>
  <div class="cta-content"
   style="color:<?php echo esc_attr($cta_text_colour); ?>; background-color: <?php echo esc_attr($cta_background_colour); ?>;">
   <h2><?php echo esc_html($cta_title); ?></h2>
   <p><?php echo esc_html($cta_description); ?></p>
   <a href="<?php echo esc_url($cta_button_link); ?>" class="cta-button"
    style="background-color:<?php echo esc_attr($cta_button_colour); ?>; color:<?php echo esc_attr($cta_button_text_colour); ?>"><?php echo esc_html($cta_button_text); ?></a>
  </div>
 </div>
</div>