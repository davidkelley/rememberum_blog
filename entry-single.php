<?
$categories = array();
$i = 0;
foreach(wp_get_post_categories(get_the_ID()) as $id) {
	$cat = get_category($id);
	$categories[] = array('name' => $cat->name, 'term_id' => $cat->term_id);
	if (++$i == 10) break;
}
?>
<div class="left">
	<? $tags = get_the_tags(); ?>
	<? if ($tags): ?>
	<h4><strong>Tags</strong></h4>
	<ul class="tags">
		<? foreach ($tags as $tag): ?>
		<li><a href="<?= get_tag_link($tag->term_id); ?>"><?= ucfirst($tag->name); ?></a></li>
		<? endforeach; ?>
	</ul>
	<? endif; ?>
	<div class="post-author-avatar">
		<?= get_avatar( get_the_author_meta('ID'), 90 ); ?>
	</div>
	<h4><strong>About the Author</strong></h4>
	<div class="post-author"><?php the_author_posts_link(); ?></div>
	<? $bio = get_the_author_meta('description'); ?>
	<? if ($bio): ?>
	<div class="post-author-bio"><?= $bio; ?></div>
	<? endif; ?>
	<h4><strong>Categories</strong></h4>
	<ul class="post-categories">
		<? foreach ($categories as $c): ?>
		<li><a href="<?= get_category_link($c['term_id']) ?>"><?= $c['name'] ?></a></li>
		<? endforeach; ?>
	</ul>
</div>
<div class="right">
	<div class="featured-meta">
		<datetime><?= the_time('F jS, Y'); ?></datetime>
		<div class="post-author"><?php the_author_posts_link(); ?></div>
	</div>
	<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
	<div class="post-content">
		<?= the_content(); ?>
	</div>
</div>
