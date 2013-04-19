<? global $wp_query; $total_pages = $wp_query->max_num_pages; ?>
<? $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<? if ($total_pages > 1): ?>
<div class="pagination clearfix">
	<? if ($paged < $wp_query->max_num_pages): ?>
	<div class="control next btn">
		<?php next_posts_link('Next Page &raquo;') ?>
	</div>
	<? endif; ?>
	<? if ($paged > 1): ?>
	<div class="control previous btn">
		<?php previous_posts_link('&laquo; Previous Page') ?>
	</div>
	<? endif; ?>
</div>
<? endif; ?>