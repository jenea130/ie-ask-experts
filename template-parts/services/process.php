<?php
$process = get_field('process');
$label = $process['label'];
$title = $process['title'];
$text = $process['text'];
$image = $process['image'];
$items = $process['items'];
?>
<div class="process">
  <div class="process__wrapper">
    <div class="process__picture">
      <div class="process__dotted">
        <?php get_template_part('template-parts/icons/fon-process'); ?>
      </div>
      <div class="process__square"> </div>
      <div class="process__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    </div>
    <div class="process__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="process__title title"><?php echo $title; ?></h2>
      <?php foreach ($items as $item) : ?>
        <?php
        $icon = $item['icon'];
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="process__item">
          <div class="process__icon">
            <?php echo $icon; ?>
          </div>
          <div class="process__body">
            <h3 class="process__subtitle"><?php echo $title; ?></h3>
            <div class="process__text text"><?php echo $text; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>