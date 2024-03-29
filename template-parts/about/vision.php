<?php
$vision = get_field('vision');
$label = $vision['label'];
$title = $vision['title'];
$text = $vision['text'];
$image = $vision['image'];
$list = $vision['list'];
$items = $vision['items'];
?>
<div class="vision">
  <div class="vision__wrapper">
    <div class="vision__picture">
      <div class="vision__dotted">
        <?php get_template_part('template-parts/icons/fon-vision') ?>
      </div>
      <div class="vision__square"></div>
      <div class="vision__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    </div>
    <div class="vision__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="vision__title title"><?php echo $title; ?></h2>
      <div class="vision__text text">
        <p><?php echo $text; ?></p>
      </div>
      <ul class="vision__list">
        <?php foreach ($list as $item) : ?>
          <?php
          $text = $item['text'];
          ?>
          <li>
            <div class="vision__item text"><?php echo $text; ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <ul class="vision__wrap">
    <?php foreach ($items as $item) : ?>
      <?php
      $title = $item['title'];
      $text = $item['text'];
      ?>
      <li class="vision__col">
        <div class="vision__num"><?php echo $title; ?></div>
        <div class="vision__desc"><?php echo $text; ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>