<?php
$history = get_field('history');
$label = $history['label'];
$title = $history['title'];
$text = $history['text'];
$item = $history['item'];
$image = $history['image'];
?>
<div class="history">
  <div class="label"><?php echo $label; ?></div>
  <h2 class="history__title title"><?php echo $title; ?></h2>
  <div class="history__text text"><?php echo $text; ?></div>
  <div class="history__block">
    <div class="history__dotted">
      <?php get_template_part('template-parts/icons/fon-history'); ?>
    </div>
    <div class="history__square"></div>
    <div class="history__video video">
      <?php echo $item; ?>
      <img class="video__img" src="<?php echo $image; ?>" alt="">
      <div class="video__play">
        <div class="video__back"></div>
        <div class="video__circle"></div>
        <div class="video__triangle"></div>
      </div>
    </div>
  </div>
</div>
</div>