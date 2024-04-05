<?php
$our_history = get_field('our_history', 28);
$label = $our_history['label'];
$title = $our_history['title'];
$item = $our_history['item'];
$image = $our_history['image'];
?>
<div class="our-history">
  <div class="label"><?php echo $label; ?></div>
  <h2 class="our-history__title title"><?php echo $title; ?></h2>
  <div class="our-history__block">
    <div class="our-history__dotted">
      <?php get_template_part('template-parts/icons/fon-our-history'); ?>
    </div>
    <div class="our-history__square"></div>
    <div class="our-history__square-y"></div>
    <div class="our-history__video video video--dark">
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