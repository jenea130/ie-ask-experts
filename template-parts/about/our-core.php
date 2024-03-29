<?php
$our_core = get_field('our_core');
$label = $our_core['label'];
$title = $our_core['title'];
$text = $our_core['text'];
$button_text = $our_core['button_text'];
$items = $our_core['items'];
?>
<div class="our-core">
  <div class="container">
    <div class="our-core__header">
      <div class="our-core__content">
        <div class="label"><?php echo $label; ?></div>
        <h2 class="our-core__title title"><?php echo $title; ?></h2>
        <div class="our-core__text text"><?php echo $text; ?></div>
      </div>
      <div class="our-core__btn btn btn--dark"><?php echo $button_text; ?></div>
    </div>
    <div class="our-core__cards">
      <?php foreach ($items as $item) : ?>
        <?php
        $icons = $item['icons'];
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="our-core__card">
          <div class="our-core__body">
            <?php echo $icons; ?>
            <h3 class="our-core__subtitle"><?php echo $title; ?></h3>
            <div class="our-core__desc text"><?php echo $text; ?></div>
            <a class="our-core__link" href="#">Read More</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>