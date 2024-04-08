<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--single-case');
?>

<div class="container">
  <?php get_template_part('template-parts/single-case-studies/preview'); ?>
  <div class="overview">
    <?php if (have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content(); ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
  <?php get_template_part('template-parts/single-team/subscribe'); ?>
  <?php get_template_part('template-parts/single-case-studies/case-gallery'); ?>
</div>

<?php get_footer(); ?>