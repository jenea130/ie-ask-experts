<?php
$plan = get_field('plan');
$label = $plan['label'];
$title = $plan['title'];
$text = $plan['text'];
$items = $plan['items'];
$select1 = $items[0]["tarif"][0]["type"];
$select2 = $items[0]["tarif"][1]["type"];
$button_text = $plan['button_text'];
?>
<div class="plan">
  <div class="container">
    <div class="plan__wrapper">
      <div class="plan__col">
        <div class="plan__label label"><?php echo $label; ?></div>
        <h2 class="plan__title title"><?php echo $title; ?></h2>
        <div class="plan__text text"><?php echo $text; ?></div>
        <div class="plan__flex">
          <div class="plan__item active" data-target="js-price-monthly">
            <div class="plan__circle"></div>
            <span class="plan__tarif"><?php echo $select1; ?></span>
          </div>
          <div class="plan__item" data-target="js-price-yearly">
            <div class="plan__circle"></div>
            <span class="plan__tarif"><?php echo $select2; ?></span>
          </div>
        </div>
      </div>
      <?php foreach ($items as $item) : ?>
        <?php
        $title = $item['title'];
        $text = $item['text'];
        $tarif = $item['tarif'];
        $list = $item['list'];
        ?>
        <div class="plan__col card-plan">
          <div class="card-plan__body">
            <h3 class="card-plan__subtitle subtitle"><?php echo $title; ?></h3>
            <div class="card-plan__desc text"><?php echo $text ?></div>
            <div class="card-plan__info">
              <div class="card-plan__price">
                <?php foreach ($tarif as $key => $item) : ?>
                  <?php
                  $type = $item["type"];
                  $price = $item["price"];
                  ?>
                  <span class="js-price-<?php echo $type; ?> <?php echo $key === 0 ? 'active' : ''; ?>"><?php echo $price; ?></span>
                <?php endforeach; ?>
              </div>
              <div class="card-plan__label label">
                <?php foreach ($tarif as $key => $item) : ?>
                  <?php
                  $type = $item["type"];
                  ?>
                  <span class="js-price-<?php echo $type; ?> <?php echo $key === 0 ? 'active' : ''; ?>"><?php echo $type; ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <ul class="card-plan__list">
            <?php foreach ($list as $item) : ?>
              <?php
              $text = $item['text'];
              ?>
              <li>
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.785156 11.6953C0.785156 13.8238 1.41632 15.9044 2.59884 17.6742C3.78135 19.4439 5.46211 20.8233 7.42856 21.6378C9.39501 22.4524 11.5588 22.6655 13.6464 22.2502C15.734 21.835 17.6515 20.81 19.1566 19.305C20.6617 17.7999 21.6866 15.8824 22.1019 13.7948C22.5171 11.7072 22.304 9.5434 21.4894 7.57694C20.6749 5.61049 19.2956 3.92974 17.5258 2.74722C15.756 1.56471 13.6754 0.933542 11.5469 0.933542C8.69439 0.939012 5.96027 2.07459 3.94324 4.09163C1.92621 6.10866 0.790625 8.84277 0.785156 11.6953ZM10.8639 7.35954L15.0031 11.0848C15.0878 11.1623 15.1554 11.2566 15.2017 11.3618C15.2479 11.4669 15.2718 11.5804 15.2718 11.6953C15.2718 11.8101 15.2479 11.9237 15.2017 12.0288C15.1554 12.1339 15.0878 12.2282 15.0031 12.3058L10.8639 16.031C10.7011 16.1737 10.489 16.2469 10.2728 16.235C10.0567 16.2231 9.85385 16.127 9.70771 15.9673C9.56158 15.8076 9.48379 15.5971 9.49102 15.3808C9.49824 15.1644 9.58991 14.9595 9.74638 14.81L13.2026 11.6953L9.74638 8.58059C9.66348 8.50795 9.59592 8.41949 9.54766 8.32039C9.49941 8.2213 9.47143 8.11356 9.46536 8.00351C9.4593 7.89346 9.47527 7.7833 9.51235 7.6795C9.54943 7.57571 9.60686 7.48036 9.68127 7.39905C9.75569 7.31774 9.84559 7.25212 9.94571 7.20602C10.0458 7.15992 10.1541 7.13428 10.2643 7.1306C10.3745 7.12692 10.4842 7.14528 10.5872 7.18459C10.6902 7.2239 10.7843 7.28338 10.8639 7.35954Z" fill="#181818"></path>
                </svg>
                <span><?php echo $text; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
          <a class="card-plan__btn btn" href="#"><?php echo $button_text; ?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>