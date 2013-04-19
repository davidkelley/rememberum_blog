<?
$categories = array();
$i = 0;
foreach(wp_get_post_categories(get_the_ID()) as $id) {
	$cat = get_category($id);
	$categories[] = array('name' => $cat->name, 'term_id' => $cat->term_id);
	if (++$i == 2) break;
}
?>
<div class="left">
	<datetime><strong><?= the_time('F jS, Y'); ?></strong></datetime>
	<? global $author_page; ?>
	<? if ( ! $author_page): ?>
	<div class="post-author"><?php the_author_posts_link(); ?></div>
	<? endif; ?>
	<ul class="post-categories">
		<? foreach ($categories as $c): ?>
		<li><a href="<?= get_category_link($c['term_id']) ?>"><?= $c['name'] ?></a></li>
		<? endforeach; ?>
	</ul>
</div>
<div class="right">
	<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
	<div class="post-content">
		<?= the_excerpt(); ?>
	</div>
	<a href="<?= the_permalink(); ?>" class="post-more">Read More</a>
</div>
