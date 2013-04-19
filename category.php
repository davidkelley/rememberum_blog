<?php get_header(); ?>

<h1><?php single_cat_title() ?></h1>

<div class="posts">
<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part('entry'); ?>
	<?php $first = false; ?>
<?php endwhile; ?>
</div>

<?php get_template_part('nav', 'below'); ?>

<?php get_footer(); ?>