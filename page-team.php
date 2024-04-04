<?php get_header(); ?>  

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--team');
?>

  <div class="container">
    <?php get_template_part('template-parts/team/great-team'); ?>
  </div>
  <div class="container">
    <?php echo get_template_part('template-parts/home/contact'); ?>
  </div>

  <?php get_footer(); ?>