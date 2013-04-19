<?php get_header(); ?>

<?php the_post(); ?>
<h1>
<?php if ( is_day() ) : ?>
<span>Daily Archives</span> <?= get_the_time(get_option('date_format')) ?>
<?php elseif ( is_month() ) : ?>
<span>Monthly Archives</span> <?= get_the_time('F Y') ?>
<?php elseif ( is_year() ) : ?>
<span>Yearly Archives</span> <?= get_the_time('Y') ?>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
Post Archives
<?php endif; ?>
</h1>
<?php rewind_posts(); ?>

<div class="posts">
<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part('entry'); ?>
	<?php $first = false; ?>
<?php endwhile; ?>
</div>

<?php get_template_part('nav', 'below'); ?>

<?php get_footer(); ?>