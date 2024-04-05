<?php
$faq = get_field('faq', 28);
$label = $faq['label'];
$title = $faq['title'];
$items = $faq['items'];
?>
<div class="faq">
  <div class="container">
    <div class="faq__header">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="faq__title title"><?php echo $title; ?></h2>
    </div>
    <div class="faq__accordion accordion">
      <?php foreach ($items as $item) : ?>
        <?php
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="accordion__item active">
          <h3 class="accordion__subtitle"><?php echo $title; ?></h3>
          <div class="accordion__body">
            <div class="accordion__text text"><?php echo $text; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>