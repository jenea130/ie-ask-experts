<?php
/*
*
* @param string $class = '' | 'page_intro--small' | 'page_intro--big'
*/
function pageIntroComponent($page_intro, $class = '')
{ ?>
  <?php
  $label = $page_intro['label'];
  $title = $page_intro['title'];
  $image = $page_intro['image'];
  ?>
  <div class="page-intro <?php echo $class; ?>">
    <img class="page-intro__img" src="<?php echo $image ?>" alt="">
    <div class="container">
      <div class="page-intro__content">
        <?php if ($label == '') : ?>
          <div class="label"><?php echo the_time('F j, Y'); ?></div>
        <?php endif; ?>
        <div class="label"><?php echo $label; ?></div>
        <?php if ($title == '') : ?>
          <h1 class="page-intro__title"><?php echo get_the_title(); ?></h1>
        <?php endif; ?>
        <h1 class="page-intro__title"><?php echo $title; ?></h1>
      </div>
    </div>
  </div>
<?php } ?>