<div class="team-members-block">
 <div class="container">
  <h1>Team members block</h1>
  <div class="team-flexbox">
   <?php if (have_rows('team_members_content')) : ?>
   <?php while (have_rows('team_members_content')) : the_row(); ?>
   <div class="column">
    <?php
      $team_member_image = get_sub_field('team_member_image');
      $team_member_alt_text = get_sub_field('team_member_alt_text');
      $team_member_name = get_sub_field('team_member_name');
      $team_member_role = get_sub_field('team_member_role');
    ?>
    <div class="team-members-content">
     <div class="team-member-image">
      <?php if (!empty($team_member_image)) : ?>
      <img src="<?php echo esc_url($team_member_image); ?>" alt="<?php echo esc_attr($team_member_alt_text); ?>">
      <?php endif;?>
     </div>
     <div class="team-member-info">
      <h3><?php echo esc_html($team_member_name); ?></h3>
      <div class="role-and-socials">
       <div class="role-title">
        <p><?php echo esc_html($team_member_role); ?></p>
       </div>
       <?php if (have_rows('team_member_social_links')) : ?>
       <?php while (have_rows('team_member_social_links')) : the_row(); ?>
       <div class="socials">
        <?php
          $social_icon_image = get_sub_field('social_icon_image');
          $social_icon_alt = get_sub_field('social_icon_alt');
          $social_link = get_sub_field('social_link');
        ?>
        <a href="<?php echo esc_attr($social_link); ?>"><img src="<?php echo esc_url($social_icon_image); ?>"
          alt="<?php echo esc_attr($social_icon_alt); ?>"></a>
       </div>
       <?php endwhile ?>
       <?php endif ?>
      </div>
     </div>
    </div>
   </div>
   <?php endwhile ?>
   <?php endif ?>
  </div>
 </div>
</div>