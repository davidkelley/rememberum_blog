<div class="left">
	<div class="banner"><strong>Featured Article</strong></div>
</div>
<div class="right">
	<div class="featured-meta">
		<datetime><?= the_time('F jS, Y'); ?></datetime>
		<div class="post-author"><?php the_author_posts_link(); ?></div>
	</div>
	<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
	<div class="post-content">
		<?= the_excerpt(); ?>
	</div>
	<a href="<?= the_permalink(); ?>" class="post-more">Read More</a>
</div>
