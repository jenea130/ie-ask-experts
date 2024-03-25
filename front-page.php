<?php

/**
 * Template Name: Front page
 */
get_header();
?>
<?php echo get_template_part('template-parts/home/home-intro'); ?>
<div class="container">
  <?php echo get_template_part('template-parts/home/features'); ?>
</div>

<?php get_footer(); ?>