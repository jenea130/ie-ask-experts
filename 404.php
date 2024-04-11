<?php get_header(); ?>

<?php 
$not_found = get_field('not_found', 633);
$title = $not_found['title'];
$subtitle = $not_found['subtitle'];
$text = $not_found['text'];
$button_text = $not_found['button_text'];
?>

<div class="not-found">
    <div class="container">
        <div class="not-found__body">
            <div class="not-found__dotted">
                <?php get_template_part('template-parts/icons/fon-not-found'); ?>
            </div>
            <div class="not-found__square"></div>
            <div class="not-found__content">
                <h2 class="not-found__title"><?php echo $title; ?></h2>
                <h4 class="not-found__subtitle"><?php echo $subtitle; ?></h4>
                <div class="not-found__text text"><?php echo $text; ?></div>
                <div class="not-found__btn btn btn--accent"><?php echo $button_text; ?></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
