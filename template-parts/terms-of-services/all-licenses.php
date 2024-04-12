<?php
$all_licenses = get_field('all_licenses');
$items = $all_licenses['items'];
?>
<div class="all-licenses">
  <?php foreach ($items as $item) : ?>
    <?php
    $title = $item['title'];
    $text = $item['text'];
    ?>
    <div class="all-licenses__body">
      <h2 class="all-licenses__title title"><?php echo $title; ?></h2>
      <div class="all-licenses__content">
        <?php echo $text; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>