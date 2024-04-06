<?php get_header(); ?>
<?php
$title = get_the_title();
$cur_terms = get_the_terms(get_the_ID(), 'job');
$term_name = $cur_terms[0]->name;
$image = get_the_post_thumbnail_url();
$for_loop = get_field('for_loop');
$socials = $for_loop['socials'];
?>
<div class="container">
  <div class="member">
    <div class="member__wrapper">
      <div class="member__picture">
        <div class="member__dotted">
          <?php get_template_part('template-parts/icons/fon-single-team'); ?>
        </div>
        <div class="member__square"> </div>
        <div class="member__img">
          <img src="<?php echo $image; ?>" alt="">
        </div>
      </div>
      <div class="member__content">
        <div class="member__header">
          <div class="member__info">
            <h3 class="member__name"><?php echo $title; ?></h3>
            <div class="member__desc"><?php echo $term_name; ?></div>
          </div>
          <?php if ($socials) : ?>
            <ul class="our-team__social member__social">
              <?php foreach ($socials as $item) : ?>
                <?php
                $url = $item['url'];
                $type = $item['type'];
                $icon_url = 'template-parts/icons/icon-' . $type;
                ?>
                <li>
                  <a class="our-team__link" href="<?php echo $url; ?>">
                    <?php get_template_part($icon_url); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
        <?php if (have_posts()) : ?>
          <?php the_post(); ?>
          <?php the_content(); ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_template_part('template-parts/single-team/subscribe'); ?>
</div>

<?php get_footer(); ?>