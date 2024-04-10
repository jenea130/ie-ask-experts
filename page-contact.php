<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro-contact');
?>

<div class="container">
  <?php get_template_part('template-parts/contact/talk'); ?>
  <?php get_template_part('template-parts/single-team/subscribe'); ?>
  <?php get_template_part('template-parts/services/contact-us'); ?>
</div>

<?php get_footer(); ?>