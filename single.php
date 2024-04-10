<?php get_header(); ?>

<?php
$page_intro = get_field('page_intro');
pageIntroComponent($page_intro, 'page-intro--single-blog');
?>

<div class="container">
	<div class="consulting">
		<?php if (have_posts()) : ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php get_template_part('template-parts/single/consulting-author'); ?>
	</div>
</div>

<?php get_footer(); ?>