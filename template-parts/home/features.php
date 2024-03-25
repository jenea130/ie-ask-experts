<?php
$features = get_field('features');
$items = $features['items'];
?>
<div class="features">
  <div class="features__wrapper">
    <?php foreach ($items as $item) : ?>
      <?php
      $title = $item['title'];
      $text = $item['text'];
      $button_text = $item['button_text'];
      $image = $item['image'];
      ?>
      <div class="features__item">
        <div class="features__img">
          <img src="<?php echo $image; ?>" alt="">
          <div class="features__content">
            <h3 class="features__subtitle subtitle"><?php echo $title; ?></h3>
            <div class="features__text text"><?php echo $text; ?></div>
            <a class="features__btn btn" href="#"><?php echo $button_text; ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>