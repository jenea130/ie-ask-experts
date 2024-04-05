<?php
$gallery = get_field('gallery', 28);
$label = $gallery['label'];
$title = $gallery['title'];
$text = $gallery['text'];
$items = $gallery['items'];
$image_1 = $gallery['image_1'];
$image_2 = $gallery['image_2'];
$image_3 = $gallery['image_3'];
?>
<div class="gallery">
  <div class="gallery__wrapper">
    <div lass="gallery__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="gallery__title title"><?php echo $title; ?></h2>
      <div class="gallery__text text"><?php echo $text; ?></div>
      <div class="gallery__list">
        <?php foreach ($items as $item) : ?>
          <?php
          $icon = $item['icon'];
          $label = $item['label'];
          $type = $item['type'];
          $text = $item['text'];
          ?>
          <div class="gallery__item">
            <div class="gallery__icon">
              <?php echo $icon; ?>
            </div>
            <div class="gallery__body">
              <div class="gallery__info"><?php echo $label; ?></div>
              <?php if ($type === 'phone') : ?>
                <a class="contact-us__subtitle" href="tel:<?php echo clear_phone($text); ?>" target="_blank">
                  <h4><?php echo $text; ?></h4>
                </a>
              <?php else : ?>
                <a class="contact-us__subtitle" href="#">
                  <h4><?php echo $text; ?></h4>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery__pictures">
      <div class="gallery__dotted">
        <?php get_template_part('template-parts/icons/fon-gallery'); ?>
      </div>
      <div class="gallery__square"></div>
      <div class="gallery__wrap">
        <div class="gallery__col gallery__col1">
          <div class="gallery__img">
            <img src="<?php echo $image_1; ?>" alt="">
          </div>
        </div>
        <div class="gallery__col gallery__col2">
          <div class="gallery__img">
            <img src="<?php echo $image_2; ?>" alt="">
          </div>
          <div class="gallery__img">
            <img src="<?php echo $image_3; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>