<?php
$feature_block_main_title = get_field('feature_block_main_title');
?>

<div class="feature-block">
 <div class="container">
  <h1><?php echo esc_html($feature_block_main_title); ?></h1>
  <div class="grid">
   <?php if ( have_rows('feature_blocks_content')) : ?>
   <?php while (have_rows('feature_blocks_content')) : the_row(); ?>
   <?php
      $feature_image = get_sub_field('feature_image');
      $feature_image_alt_tag = get_sub_field('feature_image_alt_tag');
      $feature_title = get_sub_field('feature_title');
      $feature_body_copy = get_sub_field('feature_body_copy');
    ?>
   <div class="column">
    <div class="image">
     <?php if (!empty($feature_image)) : ?>
     <img src="<?php echo esc_html($feature_image); ?>" alt="<?php echo esc_attr($feature_image_alt_tag); ?>">
     <?php endif;?>
    </div>
    <div class="content">
     <h3><?php echo esc_html($feature_title); ?></h3>
     <p><?php echo esc_html($feature_body_copy); ?></p>
    </div>
   </div>
   <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>
</div>