<?php get_header(); ?>
<?php the_post(); ?>
<h1><span>Posts tagged with</span> <?php ucfirst(single_tag_title()) ?></h1>
<?php rewind_posts(); ?>
<div class="posts">
<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part('entry'); ?>
	<?php $first = false; ?>
<?php endwhile; ?>
</div>

<?php get_template_part('nav', 'below'); ?>

<?php get_footer(); ?>