<?php 
$team = get_field('team');
$image = $team['image'];
$label = $team['label'];
$title = $team['title'];
$button_text = $team['button_text'];
?>
<div class="team">
  <img src="<?php echo $image; ?>" alt="">
  <div class="container">
    <div class="team__content">
      <div class="team__label label"><?php echo $label; ?></div>
      <h2 class="team__title title"><?php echo $title; ?></h2>
      <a class="team__btn btn btn--accent" href="<?php echo get_the_permalink(392); ?>"><?php echo $button_text; ?></a>
    </div>
  </div>
</div>