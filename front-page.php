<?php

/**
 * Template Name: Front page
 */
get_header();
?>
<?php echo get_template_part('template-parts/home/home-intro'); ?>
<div class="container">
  <?php echo get_template_part('template-parts/home/features'); ?>
  <?php echo get_template_part('template-parts/home/about-me'); ?>
</div>
<?php echo get_template_part('template-parts/home/services'); ?>
<?php echo get_template_part('template-parts/home/experience'); ?>
<?php echo get_template_part('template-parts/home/work'); ?>
<?php echo get_template_part('template-parts/home/education'); ?>
<?php echo get_template_part('template-parts/home/counter'); ?>
<?php echo get_template_part('template-parts/home/reviews'); ?>
<?php echo get_template_part('template-parts/home/team'); ?>
<?php echo get_template_part('template-parts/home/brands'); ?>
<?php echo get_template_part('template-parts/home/plan'); ?>
<div class="container">
  <div class="wrapper">
    <?php echo get_template_part('template-parts/home/contact'); ?>
  </div>
</div>

<?php get_footer(); ?>