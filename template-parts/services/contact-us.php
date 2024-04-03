<?php
$contact_us = get_field('contact_us');
$label = $contact_us['label'];
$title = $contact_us['title'];
$text = $contact_us['text'];
$items = $contact_us['items'];
?>
<div class="contact-us">
  <div class="contact-us__wrapper">
    <div class="contact-us__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="contact-us__title title"><?php echo $title; ?></h2>
      <div class="contact-us__text text"><?php echo $text; ?></div>
      <div class="contact-us__list">
        <?php foreach ($items as $item) : ?>
          <?php
          $icon = $item['icon'];
          $label = $item['label'];
          $type = $item['type'];
          $text = $item['text'];
          ?>
          <div class="contact-us__item">
            <div class="contact-us__icon">
              <?php echo $icon; ?>
            </div>
            <div class="contact-us__body">
              <div class="contact-us__info"><?php echo $label; ?></div>
              <?php if ($type === 'phone') : ?>
                <a class="contact-us__subtitle" href="tel:<?php echo clear_phone($text); ?>" target="_blank">
                 <h4><?php echo $text; ?></h4> 
                </a>
              <?php else : ?>
                <a class="contact-us__subtitle" href="#">
                  <h4><?php echo $text; ?></h4>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="contact-us__form form">
      <form action="">
        <div class="form__wrap">
          <div class="form__group">
            <label class="form__label" for="">Full Name</label>
            <input type="text" placeholder="">
          </div>
          <div class="form__group">
            <label class="form__label" for="">Email</label>
            <input type="email">
          </div>
        </div>
        <div class="form__wrap">
          <div class="form__group">
            <label class="form__label" for="">Phone </label>
            <input type="tel">
          </div>
          <div class="form__group">
            <label class="form__label" for="">Company(optional)</label>
            <input type="text">
          </div>
        </div>
        <div class="form__group">
          <label class="form__label" for="">Message</label>
          <textarea name="" placeholder=""> </textarea>
        </div>
        <button class="form__btn btn btn--dark">Send Message</button>
      </form>
    </div>
  </div>
</div>