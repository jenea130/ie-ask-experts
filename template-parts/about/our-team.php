<?php
$our_team = get_field('our_team');
$label = $our_team['label'];
$title = $our_team['title'];
$text = $our_team['text'];
?>
<div class="our-team">
  <div class="container">
    <div class="our-team__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="our-team__title title"><?php echo $title; ?></h2>
      <div class="our-team__text text"><?php echo $text; ?></div>
    </div>
    <div class="our-team__wrapper">
      <?php
      $posts = new WP_Query([
        'post_type' => 'our-team',
        'posts_per_page' => 3
      ]);
      ?>
      <?php if ($posts->have_posts()) : ?>
        <?php while ($posts->have_posts()) : ?>
          <?php $posts->the_post(); ?>
          <?php
          $title = get_the_title();
          $permalink = get_the_permalink();
          $for_loop = get_field('for_loop');
          $image = get_the_post_thumbnail_url();
          $text = $for_loop['text'];
          $socials = $for_loop['socials'];
          $cur_terms = get_the_terms(get_the_ID(), 'job');
          $term_name = $cur_terms[0]->name;
          ?>
          <div class="our-team__card">
            <a class="our-team__img" href="/single-team.html">
              <img src="<?php echo $image; ?>" alt="">
              <span class="our-team__spec"><?php echo $term_name; ?></span>
            </a>
            <div class="our-team__body">
              <h3 class="our-team__name"><?php echo $title; ?></h3>
              <div class="our-team__desc text"><?php echo $text; ?></div>
              <?php if ($socials) : ?>
                <ul class="our-team__social">
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
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>