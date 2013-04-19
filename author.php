<? get_header(); ?>

<? $author_page = true; ?>

<? the_post(); ?>

<h1><?= get_avatar( get_the_author_meta('ID'), 56 ); ?> <? the_author() ?></h1>

<? rewind_posts(); ?>
<div class="posts">
<? while ( have_posts() ) : the_post() ?>
	<? get_template_part('entry'); ?>
	<? $first = false; ?>
<? endwhile; ?>
</div>

<? get_template_part('nav', 'below'); ?>

<? get_footer(); ?>
