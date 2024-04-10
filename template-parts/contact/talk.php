<?php
$talk = get_field('talk');
$image = $talk['image'];
$label = $talk['label'];
$title = $talk['title'];
$text = $talk['text'];
$items = $talk['items'];
?>
<div class="talk">
  <div class="talk__wrapper">
    <div class="talk__picture">
      <div class="talk__dotted">
        <?php get_template_part('template-parts/icons/fon-talk'); ?>
      </div>
      <div class="talk__square"></div>
      <div class="talk__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    </div>
    <div class="talk__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="talk__title title"><?php echo $title; ?></h2>
      <div class="talk__text text"><?php echo $text; ?></div>
      <div class="talk__items">
        <?php foreach ($items as $item) : ?>
          <?php
          $icon = $item['icon'];
          $label = $item['label'];
          $type = $item['type'];
          $text = $item['text'];
          ?>
          <div class="talk__item">
            <div class="talk__logo">
              <?php echo $icon; ?>
            </div>
            <div class="talk__info">
              <span class="text"><?php echo $label; ?></span>
              <?php if ($type === 'phone') : ?>
                <a class="talk__phone" href="tel:<?php echo clear_phone($text); ?>" target="_blank">Free <?php echo $text; ?></a>
              <?php elseif ($type === 'email') : ?>
                <a class="talk__email" href="mailto:<?php echo $text; ?>" target="_blank"><?php echo $text; ?></a>
              <?php else : ?>
                <a class="talk__address" href="#"><?php echo $text; ?></a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>