<?php
$expect = get_field('expect', 28);
$image = $expect['image'];
$label = $expect['label'];
$title = $expect['title'];
$text = $expect['text'];
$items = $expect['items'];
?>
<div class="expect">
  <div class="expect__wrapper">
    <div class="expect__picture">
      <div class="expect__dotted">
        <?php get_template_part('template-parts/icons/fon-expect'); ?>
      </div>
      <div class="expect__square"></div>
      <div class="expect__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    </div>
    <div class="expect__content">
      <div class="label"><?php echo $label; ?> </div>
      <h2 class="expect__title title"><?php echo $title; ?></h2>
      <div class="expect__text text"><?php echo $text ?></div>
      <ul class="expect__list">
        <?php foreach ($items as $item) : ?>
          <?php
          $text = $item['text'];
          ?>
          <li class="expect__item">
            <div class="expect__desc text"><?php echo $text; ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>