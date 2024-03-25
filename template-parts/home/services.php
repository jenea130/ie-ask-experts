<?php
$services = get_field('services');
$label = $services['label'];
$title = $services['title'];
$items = $services['items'];
$button_text = $services['button_text'];
?>
<div class="services">
  <div class="container">
    <div class="services__info">
      <div class="services__label label"><?php echo $label; ?></div>
      <h2 class="services__title title"><?php echo $title; ?></h2>
    </div>
    <div class="services__body">
      <div class="services__arrow services__arrow--prev">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
        </svg>
      </div>
      <div class="services__arrow services__arrow--next">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
        </svg>
      </div>
    </div>
    <div class="services__wrapper">
      <?php foreach ($items as $item) : ?>
        <?php
        $image = $item['image'];
        $title = $item['title'];
        $text = $item['text'];
        ?>
        <div class="services__item">
          <div class="services__img">
            <img src="<?php echo $image; ?>" alt="">
          </div>
          <div class="services__content">
            <div class="services__subtitle subtitle"><?php echo $title; ?></div>
            <div class="services__text text"><?php echo $text; ?></div>
            <a class="services__btn btn"><?php echo $button_text; ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>