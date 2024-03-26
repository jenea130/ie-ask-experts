<?php
$reviews = get_field('reviews');
$items = $reviews['items'];
?>
<div class="reviews">
  <div class="container">
    <div class="reviews__wrapper">
      <?php foreach ($items as $item) : ?>
        <?php
        $image = $item['image'];
        $name = $item['name'];
        $type = $item['type'];
        $text = $item['text'];
        ?>
        <div class="reviews__item">
          <div class="reviews__header">
            <div class="reviews__ava">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="reviews__info">
              <h3 class="reviews__name"><?php echo $name; ?></h3>
              <div class="reviews__label label"><?php echo $type; ?></div>
            </div>
          </div>
          <div class="reviews__text text"><?php echo $text; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="reviews__body">
      <div class="reviews__box reviews__box--prev">
        <div class="reviews__arrow">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
          </svg>
        </div>
        <span>Prev</span>
      </div>
      <div class="reviews__box reviews__box--right reviews__box--next">
        <div class="reviews__arrow">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
          </svg>
        </div>
        <span>Next</span>
      </div>
    </div>
  </div>
</div>