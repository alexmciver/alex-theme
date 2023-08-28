<?php
$cta_title = get_field('cta_title');
$cta_description = get_field('cta_description');
$cta_button_text = get_field('cta_button_text');
$cta_button_link = get_field('cta_button_link');
$cta_background_colour = get_field('cta_background_colour');
?>

<div class="call-to-action-block" style="background-color: <?php echo esc_attr($cta_background_colour); ?>">
 <div class="container">
  <div class="cta-content">
   <h2><?php echo esc_html($cta_title); ?></h2>
   <p><?php echo esc_html($cta_description); ?></p>
   <a href="<?php echo esc_url($cta_button_link); ?>" class="cta-button"><?php echo esc_html($cta_button_text); ?></a>
  </div>
 </div>
</div>