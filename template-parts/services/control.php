<?php
$control = get_field('control');
$label = $control['label'];
$title = $control['title'];

$posts = new WP_Query([
  'post_type' => 'services',
  'posts_per_page' => 6
]);
?>
<div class="control">
  <div class="container">
    <div class="control__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="control__title title"><?php echo $title; ?></h2>
    </div>
    <div class="control__wrapper">
      <?php if ($posts->have_posts()) : ?>
        <?php while ($posts->have_posts()) : ?>
          <?php $posts->the_post(); ?>
          <?php
          $title = get_the_title();
          $excerpt = get_the_excerpt();
          $for_loop = get_field('for_loop');
          $icon = $for_loop['icon'];
          $permalink = get_the_permalink();
          ?>
          <a class="control__card" href="<?php echo $permalink; ?>">
            <div class="control__item">
              <div class="control__icon">
                <?php echo $icon; ?>
              </div>
              <div class="control__body">
                <h3 class="control__subtitle subtitle"><?php echo $title; ?></h3>
                <div class="control__text text"><?php echo $excerpt; ?></div>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>