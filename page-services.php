<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--services');
?>

<?php get_template_part('template-parts/services/control'); ?>
<div class="container">
  <?php get_template_part('template-parts/services/process'); ?>
</div>
<?php get_template_part('template-parts/services/pricing'); ?>
<div class="container">
  <?php get_template_part('template-parts/services/contact-us'); ?>
</div>
<?php get_footer(); ?>