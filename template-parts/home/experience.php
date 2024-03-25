<?php
$experience = get_field('experience');
$image = $experience['image'];
$label = $experience['label'];
$title = $experience['title'];
$text = $experience['text'];
$items = $experience['items'];
?>
<div class="experience">

  <img src="<?php echo $image; ?>" alt="">
  <div class="experience__left">
    <?php get_template_part('template-parts/icons/fon-experience-left'); ?>
  </div>
  <div class="experience__right">
    <?php get_template_part('template-parts/icons/fon-experience-right'); ?>
  </div>
  <div class="container">
    <div class="experience__wrapper">
      <div class="experience__content">
        <div class="experience__label label"><?php echo $label; ?></div>
        <h2 class="experience__title title"><?php echo $title; ?></h2>
        <div class="experience__text"><?php echo $text; ?></div>
      </div>
      <div class="experience__counter">
        <?php foreach ($items as $item) : ?>
          <?php
          $count = $item['count'];
          $label = $item['label'];
          ?>
          <div class="experience__body">
            <div class="experience__item" data-count="<?php echo $count; ?>"></div>
            <span class="experience__tag"><?php echo $label; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>