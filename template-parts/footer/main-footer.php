<?php
$footer = get_field('footer', 'option');
$logo = $footer['logo'];
$image = $footer['image'];
// $text = $footer['text'];
$socials = $footer['socials'];
$title_1 = $footer['title_1'];
$title_2 = $footer['title_2'];
$title_3 = $footer['title_3'];
$full_address = $footer['full_address'];
$button_text = $footer['button_text'];
$copyright = $footer['copyright'];
?>
<div class="main-footer">
  <img src="<?php echo $image; ?>" alt="">
  <div class="container">
    <div class="main-footer__wrapper">
      <div class="main-footer__head">
        <a class="main-footer__logo" href="#">
          <?php echo $logo; ?>
        </a>
        <div class="main-footer__social">
          <?php foreach ($socials as $item) : ?>
            <?php
            $text = $item['text'];
            $url = $item['url'];
            ?>
            <a href="<?php echo $url; ?>" target="_blank"><?php echo $text; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="main-footer__content">
        <div class="main-footer__col">
          <h3 class="main-footer__title"><?php echo $title_1; ?></h3>
          <?php wp_nav_menu([
            'theme_location'  => 'product',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'main-footer__list',
            'menu_id'         => '',
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
        </div>
        <div class="main-footer__col">
          <h3 class="main-footer__title"><?php echo $title_2; ?></h3>
          <?php wp_nav_menu([
            'theme_location'  => 'company',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'main-footer__list',
            'menu_id'         => '',
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
        </div>
        <div class="main-footer__col">
          <h3 class="main-footer__title"><?php echo $title_3; ?></h3>
          <div class="main-footer__address"><?php echo $full_address; ?></div>
          <a class="btn" href="#"><?php echo $button_text; ?></a>
        </div>
      </div>
    </div>
    <div class="main-footer__copyright footer-copyright">
      <div class="footer-copyright__col">&copy;<?php echo current_time('Y'); ?>&nbsp;<?php echo $copyright; ?></div>
      <div class="footer-copyright__col">
        <a href="<?php echo get_the_permalink(254); ?>" target="_blank"><?php echo get_the_title(254); ?></a>
      </div>
      <div class="footer-copyright__col">
        <a href="<?php echo get_the_permalink(3); ?>" target="_blank"><?php echo get_the_title(3); ?></a>
      </div>
    </div>
  </div>
</div>