<?php
$brands = get_field('brands');
$items = $brands['items'];
?>
<div class="brands">
  <div class="brands__wrapper">
    <?php foreach ($items as $item) : ?>
      <?php
      $logo = $item['logo'];
      ?>
      <div class="brands__logo">
        <?php echo $logo; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>