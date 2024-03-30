<?php
$tax_query = [];
$term_id = isset($_GET['term_id']) ? $_GET['term_id'] : '';
if ($term_id) {
  $tax_query[] =  array(
    'taxonomy' => 'category-case-studies',
    'field'    => 'slug',
    'terms'    => $term_id,
  );
}
$terms = get_terms([
  'taxonomy' => 'category-case-studies',
  'hide_empty' => false,
]);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts = new WP_Query([
  'post_type' => 'case-studies',
  'posts_per_page' => 2,
  'tax_query' => $tax_query,
  'paged'          => $paged,
]);
?>
<div class="taxes">
  <ul class="taxes__header">
    <li class="taxes__item" data-target="all">
      <?php
      $class_name = !$term_id ? 'active' : '';
      ?>
      <a class="<?php echo $class_name; ?>" href="<?php echo get_the_permalink(); ?>">
        All
      </a>
    </li>
    <?php foreach ($terms as $term) : ?>
      <?php
      $name = $term->name;
      $slug = $term->slug;
      $class_name = $slug === $term_id ? 'active' : '';
      ?>
      <li class="taxes__item" data-target="<?php echo $slug; ?>">
        <a class="<?php echo $class_name; ?>" href="<?php echo get_the_permalink(); ?>?term_id=<?php echo $slug; ?>">
          <?php echo $name; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="taxes__wrapper">
    <?php if ($posts->have_posts()) : ?>
      <?php while ($posts->have_posts()) : ?>
        <?php $posts->the_post(); ?>
        <?php
        $permalink = get_the_permalink();
        $image = get_the_post_thumbnail_url();
        $title = get_the_title();
        $term = get_the_terms(get_the_ID(), 'category-case-studies')[0];
        $term_name = $term->name;
        $term_slug = $term->slug;
        ?>

        <a class="taxes__img <?php echo $term_slug; ?>" href="<?php echo $permalink; ?>">
          <img src="<?php echo $image; ?>" alt="">
          <div class="taxes__wrap">
            <div class="taxes__icon">
              <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.93968 18.9259V11.8769H0.78468V7.84886H7.93968V0.799858H12.1797V7.84886H19.3347V11.8769H12.1797V18.9259H7.93968Z" fill="#181818"></path>
              </svg>
            </div>
            <div class="taxes__info">
              <h3 class="taxes__subtitle subtitle"><?php echo $title; ?></h3>
              <div class="taxes__text"><?php echo $term_name; ?></div>
            </div>
          </div>
        </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
  <?php wp_pagenavi(array('query' => $posts)); ?>
</div>