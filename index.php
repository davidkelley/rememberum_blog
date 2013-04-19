<?php get_header(); ?>

<div class="posts">
<? $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<? global $wp_query; $first = $paged == 1 ? true : false; ?>
<? while ( have_posts() ) : the_post() ?>
	<? get_template_part('entry'); ?>
	<? $first = false; ?>
<? endwhile; ?>
</div>

<? get_template_part('nav', 'below'); ?>

<? get_footer(); ?>