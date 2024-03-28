<?php
$footer = get_field('footer', 'option');
$logo = $footer['logo'];
$image = $footer['image'];
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
          <a href="https://facebook.com" target="_blank">Fb. /</a>
          <a href="https://instagram.com" target="_blank">Ig. /</a>
          <a href="https://twitter.com" target="_blank">Tw. /</a>
          <a href="#" target="_blank">Be.</a>
        </div>
      </div>
      <div class="main-footer__content">
        <div class="main-footer__col">
          <h3 class="main-footer__title">Product</h3>
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
          <h3 class="main-footer__title">Company</h3>
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
          <h3 class="main-footer__title">Address</h3>
          <div class="main-footer__address">1700 W Blancke St, kiyev port south USA, America</div>
          <a class="btn" href="#">Book an Appoinment</a>
        </div>
      </div>
    </div>
    <div class="main-footer__copyright footer-copyright">
      <div class="footer-copyright__col">©2020 Consultalk. All rights reserved</div>
      <div class="footer-copyright__col">
        <a href="/licenses.html">Terms of Service</a>
      </div>
      <div class="footer-copyright__col">
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</div>