<?php 
/*
*
* @param string $class = '' | 'page_intro--small' | 'page_intro--big'
*/
function pageIntroComponent($page_intro, $class='')
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
        <div class="label"><?php echo $label; ?></div>
        <h1 class="page-intro__title"><?php echo $title; ?></h1>
      </div>
    </div>
  </div>
<?php } ?>