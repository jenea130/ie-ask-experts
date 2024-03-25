<?php
$about_me = get_field('about_me');
$label = $about_me['label'];
$title = $about_me['title'];
$text = $about_me['text'];
$email = $about_me['email'];
$phone = $about_me['phone'];
$button_text = $about_me['button_text'];
$image = $about_me['image'];
$quantity = $about_me['quantity'];
$description = $about_me['description'];
?>
<div class="about-me">
  <div class="about-me__wrapper">
    <div class="about-me__picture">
      <img src="<?php echo $image; ?>" alt="">
      <div class="about-me__circle about-me__circle--yellow"></div>
      <div class="about-me__circle about-me__circle--green"></div>
      <div class="about-me__clients">
        <?php get_template_part('template-parts/icons/icon-people'); ?>
        <div class="about-me__block">
          <div class="about-me__quantity"><?php echo $quantity; ?></div>
          <div class="about-me__description"><?php echo $description; ?></div>
        </div>
      </div>
    </div>
    <div class="about-me__content">
      <div class="about-me__label label"><?php echo $label; ?></div>
      <h2 class="about-me__title title"><?php echo $title; ?></h2>
      <div class="about-me__text text">
        <?php echo $text; ?>
      </div>
      <div class="about-me__email">
        <?php get_template_part('template-parts/icons/icon-mail'); ?>
        <a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a>
      </div>
      <div class="about-me__phone">
        <?php get_template_part('template-parts/icons/icon-phone-about'); ?>
        <a href="tel:<?php echo clear_phone($phone); ?>" target="_blank"><?php echo $phone; ?></a>
      </div>
      <a class="about-me__btn btn btn--dark" href="#"><?php echo $button_text; ?></a>
    </div>
  </div>
</div>