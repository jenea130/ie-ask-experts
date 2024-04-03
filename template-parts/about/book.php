<?php
$book = get_field('book');
$label = $book['label'];
$title = $book['title'];
$text = $book['text'];
$phone = $book['phone'];
$image_1 = $book['image_1'];
$image_2 = $book['image_2'];
?>
<div class="book">
  <div class="book__wrapper">
    <div class="book__picture">
      <div class="book__dotted">
        <?php get_template_part('template-parts/icons/fon-book'); ?>
      </div>
      <div class="book__square"></div>
      <div class="book__page">
        <img src="<?php echo $image_1; ?>" alt="">
      </div>
      <div class="book__img">
        <img src="<?php echo $image_2; ?>" alt="">
      </div>
    </div>
    <div class="book__content">
      <div class="label"><?php echo $label; ?></div>
      <h2 class="book__title title">Better Consult, <strong>Better</strong> Results</h2>
      <div class="book__text text"><?php echo $text; ?></div>
      <a class="book__btn" href="tel:<?php echo clear_phone($phone); ?>" target="_blank">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.17684 11.8493C8.1454 13.8494 9.76274 15.4626 11.7654 16.426C11.9131 16.4959 12.0765 16.5262 12.2394 16.5138C12.4024 16.5015 12.5594 16.4469 12.6948 16.3554L15.6362 14.3906C15.7661 14.3024 15.9163 14.2487 16.0727 14.2343C16.229 14.2199 16.3865 14.2453 16.5303 14.3082L22.0366 16.6731C22.2247 16.7514 22.382 16.8894 22.484 17.0659C22.5861 17.2423 22.6273 17.4474 22.6013 17.6496C22.4268 19.0117 21.7619 20.2636 20.7311 21.171C19.7003 22.0783 18.3742 22.579 17.001 22.5793C12.7572 22.5793 8.68734 20.8935 5.68657 17.8927C2.68581 14.892 1 10.8221 1 6.57835C1.00031 5.20508 1.50099 3.87898 2.40835 2.84819C3.31571 1.81739 4.56758 1.15253 5.92971 0.978008C6.13188 0.952038 6.33699 0.993249 6.51344 1.09529C6.6899 1.19734 6.82791 1.35456 6.90624 1.54275L9.27109 7.06073C9.33258 7.20232 9.35831 7.35687 9.346 7.51075C9.33369 7.66463 9.28372 7.81312 9.20049 7.94313L7.23567 10.9316C7.1482 11.0667 7.09685 11.2221 7.08655 11.3827C7.07626 11.5434 7.10734 11.704 7.17684 11.8493V11.8493Z" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span><?php echo $phone; ?></span>
      </a>
    </div>
  </div>
</div>