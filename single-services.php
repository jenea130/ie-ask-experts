<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--single-service');
?>

<div class="projections">
  <div class="container">
    <div class="projections__header">
      <div class="projections__content">
        <?php if (have_posts()) : ?>
          <?php the_post(); ?>
          <?php
          $title = get_the_title();
          $logo = get_field('logo');
          ?>
          <div class="projections__logo">
            <?php echo $logo; ?>
          </div>
          <h2 class="projections__title title"><?php echo $title; ?></h2>
          <div class="projections__text text">
            <?php the_content(); ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="projections__arrows">
        <div class="projections__arrow projections__arrow--prev">
          <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2041 10.366L2.33167 10.366" stroke-width="3.19444" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M10.8701 18.9043L2.3314 10.3656L10.8701 1.82686" stroke-width="3.19444" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
        <div class="projections__arrow projections__arrow--next">
          <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.19189 10.8313H23.3434M23.3434 10.8313L14.6905 2.17847M23.3434 10.8313L14.6905 19.4842" stroke-width="3.23715" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/single-services/projections'); ?>
  </div>
</div>
<div class="container">
  <?php get_template_part('template-parts/single-services/expect'); ?>
</div>
<?php get_template_part('template-parts/single-services/brands-light'); ?>
<?php get_template_part('template-parts/single-services/our-history'); ?>
<div class="container">
  <?php get_template_part('template-parts/single-services/gallery'); ?>
</div>
<?php get_template_part('template-parts/single-services/faq'); ?>

<?php get_footer(); ?>