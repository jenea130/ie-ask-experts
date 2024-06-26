<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro-blog');
?>

<?php
$articles = get_field('articles');
$label = $articles['label'];
$title = $articles['title'];
$button_text = $articles['button_text'];

$blog = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => -1,
]);
?>

<div class="container">
  <div class="articles">
    <header class="articles__header">
      <div class="articles__content">
        <div class="label"><?php echo $label; ?></div>
        <h2 class="articles__title title"><?php echo $title; ?></h2>
      </div>
      <a class="articles__btn btn btn--accent"><?php echo $button_text; ?></a>
    </header>
    <div class="articles__wrapper">
      <?php if ($blog->have_posts()) : ?>
        <?php while ($blog->have_posts()) : ?>
          <?php $blog->the_post(); ?>
          <?php
          $title = get_the_title();
          $excerpt = get_the_excerpt();
          $image = get_the_post_thumbnail_url();
          $permalink = get_the_permalink();
          $term = get_the_terms(get_the_ID(), 'author_custom')[0];
          $picture = get_field('image', $term);
          ?>
          <div class="articles__item">
            <div class="articles__img">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            <h3 class="articles__subtitle"><?php echo $title; ?></h3>
            <div class="articles__text text"><?php echo $excerpt; ?></div>
            <footer class="articles__footer">
              <div class="articles__info">
                <div class="articles__ava">
                  
                  <img src="<?php echo $picture; ?>" alt="">
                </div>
                <span class="articles__name text"><?php echo $term->name; ?></span>
                <span class="articles__date text"><?php echo the_time('F j, Y'); ?></span>
              </div>
              <a class="articles__link btn" href="<?php echo $permalink; ?>">Read More</a>
            </footer>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
  <?php echo get_template_part('template-parts/home/contact'); ?>
</div>

<?php get_footer(); ?>