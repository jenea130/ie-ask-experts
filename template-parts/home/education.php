<?php
$education = get_field('education');
$label = $education['label'];
$title = $education['title'];
$sub_label_left = $education['sub_label_left'];
$sub_label_right = $education['sub_label_right'];
$items_left = $education['items_left'];
$items_right = $education['items_right'];
?>
<div class="education">
  <div class="container">
    <div class="education__label label"><?php echo $label; ?></div>
    <h2 class="education__title title"><?php echo $title; ?></h2>
    <div class="education__wrapper">
      <div class="education__col">
        <div class="education__label--left label"><?php echo $sub_label_left; ?></div>
        <?php foreach ($items_left as $item) : ?>
          <?php
          $label = $item['label'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="education__item education__item--left">
            <div class="education__desc"><?php echo $label; ?></div>
            <h3 class="education__subtitle subtitle"><?php echo $title; ?></h3>
            <div class="education__text text"><?php echo $text; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="education__col education__col--right">
        <div class="education__label--right label"><?php echo $sub_label_right; ?></div>
        <?php foreach ($items_right as $item) : ?>
          <?php
          $label = $item['label'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="education__item education__item--right">
            <div class="education__desc"><?php echo $label; ?></div>
            <h3 class="education__subtitle subtitle"><?php echo $title; ?></h3>
            <div class="education__text text"><?php echo $text; ?></div>
          </div>
        <?php endforeach; ?>
        <div>
        </div>
      </div>
    </div>
  </div>