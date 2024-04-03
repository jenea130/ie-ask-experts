<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro);
?>

<div class="container">
  <?php echo get_template_part("template-parts/about/vision"); ?>
</div>
<?php echo get_template_part("template-parts/about/our-core"); ?>
<div class="container">
  <?php echo get_template_part("template-parts/about/history"); ?>
  <?php echo get_template_part("template-parts/about/our-team"); ?>
  <div class="container">
    <?php echo get_template_part("template-parts/about/book"); ?>
  </div>

  <?php get_footer(); ?>