<?php
$home_intro = get_field('home_intro');
$label = $home_intro['label'];
$title = $home_intro['title'];
$text = $home_intro['text'];
$image = $home_intro['image'];
$button_text = $home_intro['button_text'];
?>

<section class="home-intro">
  <div class="home-intro__img">
    <img src="<?php echo $image; ?>" alt="">
    <div class="container">
      <div class="home-intro__content">
        <div class="home-intro__label label"><?php echo $label; ?></div>
        <h1 class="home-intro__title"><?php echo $title; ?></h1>
        <div class="home-intro__text"><?php echo $text; ?></div>
        <a class="btn-icon" href="#">
          <?php get_template_part('template-parts/icons/icon-book'); ?>
          <span><?php echo $button_text; ?></span>
        </a>
      </div>
    </div>
  </div>
</section>