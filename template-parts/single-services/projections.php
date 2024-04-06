<?php
$projections = get_field('projections');
$items = $projections['items'];
?>
<div class="projections__wrapper">
  <?php foreach ($items as $item) : ?>
    <?php
    $icon = $item['icon'];
    $title = $item['title'];
    $text = $item['text'];
    ?>
    <div class="projections__item">
      <div class="projections__icon">
      <?php echo $icon; ?>
      </div>
      <div class="projections__subtitle subtitle"><?php echo $title; ?></div>
      <div class="projections__desc text"><?php echo $text; ?></div>
    </div>
  <?php endforeach; ?>
</div>