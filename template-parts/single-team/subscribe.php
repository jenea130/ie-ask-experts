<?php 
$subscribe = get_field('subscribe', 392);
$title = $subscribe['title'];
$text = $subscribe['text'];
$placeholder = $subscribe['placeholder'];
$button_text = $subscribe['button_text'];
?>
<div class="subscribe">
  <div class="subscribe__dotted">
    <?php get_template_part('template-parts/icons/fon-subscribe'); ?>
  </div>
  <div class="subscribe__square"></div>
  <div class="subscribe__wrapper">
    <div class="subscribe__content">
      <h3 class="subscribe__subtitle"><?php echo $title; ?></h3>
      <div class="subscribe__text text"><?php echo $text; ?></div>
    </div>
    <div class="subscribe__form form-small">
      <div class="form-small__group">
        <input type="text" placeholder="<?php echo $placeholder; ?>">
        <button class="btn btn--accent" type="button"><?php echo $button_text; ?></button>
      </div>
    </div>
  </div>
</div>