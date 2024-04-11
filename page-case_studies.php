<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--case-studies');
?>

<div class="container" id="js-taxes">
  <?php get_template_part('template-parts/case-studies/taxes'); ?>
  <?php get_template_part('template-parts/services/contact-us'); ?>
</div>
<?php get_footer(); ?>