<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <?php
    $header = get_field('header', 'option');
    $logo = $header['logo'];
    $footer = get_field('footer', 'option');
    $hours = $footer['hours'];
    $full_address = $footer['full_address'];
    $socials = $footer['socials'];
    $phone_number = $footer['phone_number'];
    ?>
    <header class="top-header">
      <div class="container">
        <div class="top-header__wrapper">
          <div class="top-header__days">
            <?php get_template_part('template-parts/icons/icon-hours'); ?>
            <span><?php echo $hours; ?></span>
          </div>
          <div class="top-header__location">
            <?php get_template_part('template-parts/icons/icon-location'); ?>
            <span><?php echo $full_address; ?></span>
          </div>
          <ul class="top-header__social">
            <?php foreach ($socials as $item) : ?>
              <?php
              $image = $item['image'];
              $url = $item['url'];
              ?>
              <li>
                <a class="top-header__link" href="<?php echo $url; ?>" target="_blank">
                  <?php echo $image; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </header>
    <header class="main-header">
      <div class="container">
        <div class="main-header__wrapper">
          <a class="main-header__logo" href="<?php echo home_url(); ?>">
            <?php echo $logo; ?>
          </a>
          <?php wp_nav_menu([
            'theme_location'  => 'menu-1',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'main-menu main-header__main-menu',
            'menu_id'         => 'js-main-menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ]); ?>
          <a class="btn-icon btn-icon--mobile" href="tel:<?php echo clear_phone($phone_number); ?>" target="_blank">
            <?php get_template_part('template-parts/icons/icon-phone'); ?>
            <span><?php echo $phone_number; ?></span>
          </a>
          <div class="sandwich-wrap" id="js-sandwich-wrap">
            <div class="sandwich">
              <div class="sandwich__line sandwich__line--top"></div>
              <div class="sandwich__line sandwich__line--middle"></div>
              <div class="sandwich__line sandwich__line--bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </header>