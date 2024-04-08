<?php
$case_gallery = get_field('case_gallery', 30);
$title = $case_gallery['title'];
$button_text = $case_gallery['button_text'];
$items = $case_gallery['items'];
?>
<div class="case-gallery">
  <h2 class="case-gallery__title title"><?php echo $title; ?></h2>
  <div class="case-gallery__wrapper">
    <?php foreach ($items as $item) : ?>
      <?php
      $image = $item;
      ?>
      <div class="case-gallery__img">
        <img src="<?php echo $image; ?>" alt="">
      </div>
    <?php endforeach; ?>
  </div>
  <div class="btn btn--dark"><?php echo $button_text; ?></div>
</div>