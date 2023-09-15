<div class="testimonial-block">
 <div class="container">
  <h1>Testimonial Block</h1>
  <div class="testimonial-flexbox">
   <?php if (have_rows('testimonial_block_content')) : ?>
   <?php while (have_rows('testimonial_block_content')) : the_row(); ?>
   <div class="column">
    <?php
     $testimonial_copy = get_sub_field('testimonial_copy');
     $person_name = get_sub_field('person_name');
     $job_title_or_company = get_sub_field('job_title_or_company');
     $testimonial_image = get_sub_field('testimonial_image');
     $testimonial_image_alt = get_sub_field('testimonial_image_alt');
    ?>
    <div class="testimonial-content">
     <p><?php echo esc_html($testimonial_copy); ?></p>
     <div class="person-info">
      <div class="content-left">
       <p><?php echo esc_html($person_name); ?></p>
       <p><?php echo esc_html($job_title_or_company); ?></p>
      </div>
      <div class="content-right">
       <img src="<?php echo esc_html($testimonial_image); ?>" alt="<?php echo esc_attr($testimonial_image_alt); ?>">
      </div>
     </div>
    </div>
   </div>
   <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>
</div>



<script>
jQuery(document).ready(function($) {
 $('.testimonial-flexbox').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  autoplay: true,
  cssEase: 'linear'
 });
});
</script>