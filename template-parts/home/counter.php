<?php
$counter = get_field('counter');
$items = $counter['items'];
?>
<div class="counter">
  <div class="container">
    <div class="counter__wrapper">
      <?php foreach ($items as $item) : ?>
        <?php
        $icon = $item['icon'];
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="counter__item">
          <div class="counter__icon">
          <?php echo $icon; ?>
          </div>
          <div class="counter__body">
            <h3 class="counter__num"><?php echo $title; ?></h3>
            <div class="counter__desc"><?php echo $text; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>