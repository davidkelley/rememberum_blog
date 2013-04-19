<?php get_header(); ?>

<article>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template('', true); ?>
<?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>