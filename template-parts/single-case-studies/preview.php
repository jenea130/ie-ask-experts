<?php 
$preview = get_field('preview');
$image = $preview['image'];
$button_text = $preview['button_text'];
$post = get_post(get_the_ID());
$title = $post->post_title;
$term = get_terms('category-case-studies', get_the_ID())[0]->name;
?>
<div class="preview">
  <div class="preview__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="preview__wrapper">
    <div class="preview__content">
      <div class="preview__col">
        <h3 class="preview__subtitle">Case Name</h3>
        <div class="preview__desc"><?php echo $title; ?></div>
      </div>
      <div class="preview__col">
        <h3 class="preview__subtitle">Category</h3>
        <div class="preview__desc"><?php echo $term; ?></div>
      </div>
      <div class="preview__col">
        <h3 class="preview__subtitle">Date</h3>
        <div class="preview__desc"><?php echo the_time('jS F Y'); ?></div>
      </div>
    </div>
    <div class="preview__live">
      <button class="btn btn--accent"><?php echo $button_text; ?></button>
    </div>
  </div>
</div>