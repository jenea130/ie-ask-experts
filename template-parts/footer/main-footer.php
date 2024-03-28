<?php 
$main_footer = get_field('main-footer', 'option');
$logo = $main_footer['logo'];
$image = $main_footer['image'];
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
          <ul class="main-footer__list">
            <li><a class="main-footer__link" href="#">Service</a></li>
            <li><a class="main-footer__link" href="#">FAQ</a></li>
            <li><a class="main-footer__link" href="#">Single Service</a></li>
            <li><a class="main-footer__link" href="#">Get Quote</a></li>
            <li><a class="main-footer__link" href="#">Prices</a></li>
          </ul>
        </div>
        <div class="main-footer__col">
          <h3 class="main-footer__title">Company</h3>
          <ul class="main-footer__list">
            <li><a class="main-footer__link" href="#">About</a></li>
            <li><a class="main-footer__link" href="#">News</a></li>
            <li><a class="main-footer__link" href="#">Contacts</a></li>
            <li><a class="main-footer__link" href="#">Testimonials</a></li>
            <li><a class="main-footer__link" href="#">Our team</a></li>
            <li><a class="main-footer__link" href="#">Our approach</a></li>
          </ul>
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