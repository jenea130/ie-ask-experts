<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--licenses');
?>

<div class="container">
  <?php get_template_part('template-parts/terms-of-services/all-licenses'); ?>
  <?php get_template_part('template-parts/single-team/subscribe'); ?>
</div>

<?php get_footer(); ?>