<? $home = is_home(); global $first; ?>
<? if ( ! is_singular()): ?>
	<div id="post-<?php the_ID(); ?>" class="post list clearfix">
	<? if ($home && $first): ?>
		<div class="featured clearfix">
		<? get_template_part( 'entry', 'featured' ); ?>
		</div>
	<? else: ?>
		<? get_template_part( 'entry', 'listed' ); ?>
	<? endif; ?>
<? else: ?>
	<div id="post-<?php the_ID(); ?>" class="post single clearfix">
		<div class="featured clearfix">
		<? get_template_part( 'entry', 'single' ); ?>
		</div>
<? endif; ?>
</div>