<?php get_header(); ?>  

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--team');
?>

  <div class="container">
    <?php get_template_part('template-parts/team/great-team'); ?>
  </div>
  <div class="container">
    <div class="contact contact--team">
      <div class="contact__img"> <img src="assets/i/contact/contact-img.jpg" alt=""></div>
      <div class="contact__content">
        <div class="contact__wrap">
          <div class="contact__label label">Contact</div>
          <h2 class="contact__title title">Ready To Talk?</h2>
          <div class="contact__text text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pellentesque habitant morbi tristique.</div>
        </div>
        <div class="contact__form form-small">
          <div class="form-small__group">
            <input type="text" placeholder="your mail address">
            <button class="btn btn--contrast" type="button">Send Message </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>