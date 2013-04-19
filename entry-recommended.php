<?php
	$per_page = 6;	

	$args = array( 'numberposts' => $per_page * 3, 'order'=> 'ASC', 'orderby' => 'post_date' );
	$posts = get_posts($args);

	$posts = array_merge($posts,$posts);
	$posts = array_merge($posts,$posts);

	
	$num = count($posts);
	$pages = ceil($num / $per_page);

	//setup_postdata($post);
?>
<div class="title inner">
	<h2>Recommended Reading</h2>
	<? if ($pages > 1): ?>
	<div class="dots">
		<div class="left"></div>
		<div class="right"></div>
		<? for ($i=0;$i<$pages;$i++): ?>
		<div class="dot <?= $i == 0 ? 'active' : '' ?>" data-dot="<?= $i ?>"></div>
		<? endfor; ?>
	</div>
	<? endif;?>
</div>
<div class="pages">
	<? $i = 0; ?>
	<? foreach ($posts as $post): setup_postdata($post); ?>
	<? if ($i%$per_page == 0): ?><div class="page inner clearfix"><? endif; ?>
	<? get_template_part( 'entry-recommended', 'single' ); ?>
	<? $i++; ?>
	<? if ($i == $per_page || $i == $num): $i = 0; ?></div><? endif; ?>
	<? endforeach; ?>
</div>