<?php
$work = get_field('work');
$label = $work['label'];
$title = $work['title'];
$button_text = $work['button_text'];
$image = $work['image'];
?>
<div class="work">
  <img class="work__img" src="<?php echo $image; ?>" alt="">
  <div class="container rel">
    <div class="work__label label"><?php echo $label; ?></div>
    <div class="work__header">
      <h2 class="work__title title"><?php echo $title; ?></h2>
      <a class="work__btn btn" href="<?php echo get_the_permalink(30); ?>#js-taxes"><?php echo $button_text; ?></a>
    </div>
    <div class="work__grid">
      <?php
      $works = new WP_Query([
        'post_type' => 'case-studies',
        'posts_per_page' => -1,
        'meta_query' => [
          [
            'key' => 'for_loop_featured',
            'value' => true,
          ]
        ]
      ]);
      ?>
      <?php if ($works->have_posts()) : ?>
        <?php while ($works->have_posts()) : ?>
          <?php $works->the_post(); ?>
          <?php
          $title = get_the_title();
          $permalink = get_the_permalink();
          $image = get_the_post_thumbnail_url();
          $cur_terms = get_the_terms(get_the_ID(), 'category-case-studies');
          $term_name = $cur_terms[0]->name;
          ?>
          <div class="work__item">
            <img src="<?php echo $image; ?>" alt="">
            <div class="work__wrap">
              <a href="<?php echo $permalink; ?>" class="work__icon">
                <?php get_template_part('template-parts/icons/icon-plus'); ?>
              </a>
              <div class="work__info">
                <h3 class="work__subtitle subtitle"><?php echo $title; ?></h3>
                <div class="work__text"><?php echo $term_name; ?></div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>