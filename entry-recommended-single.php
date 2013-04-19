<div class="recommended-post">
	<h3><?= the_title(); ?></h3>
	<div class="recommended-post-content">
		<? $ex = get_the_excerpt(); $maxlen = 150; ?>
		<?= strlen($ex) > $maxlen ? substr($ex,0,$maxlen - 3) . '...' : $ex; ?>
	</div>
	<a href="<?= the_permalink(); ?>" class="post-more">Read More</a>
</div>