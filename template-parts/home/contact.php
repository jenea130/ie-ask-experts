<?php 
$contact = get_field('contact');
$label = $contact['label'];
$title = $contact['title'];
$text = $contact['text'];
$image = $contact['image'];
$placeholder = $contact['placeholder'];
$button_text = $contact['button_text'];
?>
<div class="contact">
  <div class="contact__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="contact__content">
    <div class="contact__wrap">
      <div class="contact__label label"><?php echo $label; ?></div>
      <h2 class="contact__title title"><?php echo $title; ?></h2>
      <div class="contact__text text"><?php echo $text; ?></div>
    </div>
    <div class="contact__form form-small">
      <div class="form-small__group">
        <input type="text" placeholder="<?php echo $button_text; ?>">
        <button class="btn btn--contrast" type="button"><?php echo $button_text; ?></button>
      </div>
    </div>
  </div>
</div>