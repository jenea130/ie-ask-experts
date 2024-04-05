<?php
$brands_light = get_field('brands_light', 28);
$items = $brands_light['items'];
?>
<div class="brands-light">
  <div class="brands-light__wrapper">
    <?php foreach ($items as $item) : ?>
      <?php
      $logo = $item['logo'];
      ?>
      <div class="brands-light__logo">
        <?php echo $logo; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>