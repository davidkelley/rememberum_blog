	</div>

	<? if (is_single()): ?>
		<div class="recommended container clearfix">
			<? get_template_part( 'entry', 'recommended' ); ?>
		</div>
	<? endif; ?>

	<footer>
		<div class="container clearfix">
			<ul class="col2 network-links">
				<li><a href="http://rememberum.com/login">Login</a></li>
				<li><a href="http://rememberum.com/signup">Create</a></li>
				<li><a href="<?= site_url(); ?>">Blog</a></li>
				<li><a href="http://rememberum.com/about">About</a></li>
				<li><a href="http://rememberum.com/faq">FAQ</a></li>
				<li><a href="http://rememberum.com/contact">Contact</a></li>
			</ul>
			<div class="col3">
				<img src="http://rememberum.com/rmbrm/img/layout/footer-logo.134x17.png" />
				<div class="social">
					<a target="_blank" href="http://www.facebook.com/pages/Rememberum/225194147610685"><img src="http://rememberum.com/rmbrm/img/layout/footer-fb.13x30.png" /></a>
					<a target="_blank" href="http://www.twitter.com/rememberum"><img src="http://rememberum.com/rmbrm/img/layout/footer-twitter.32x28.png" /></a>
				</div>
				<div class="policy"><a target="_blank" href="http://rememberum.com/">Privacy Policy</a></div>
				<div class="policy"><a target="_blank" href="http://rememberum.com/">Terms &amp; Conditions</a></div>
			</div>
			<div class="newsletter push3 clearfix col4">
				<div class="pull-right">
					
				</div>
			</div>
		</div>
		<div class="container copyright">
			&copy;<?= date('Y'); ?> Rememberum. All Rights Reserved.
		</div>
	</footer>

	<?php wp_footer(); ?>

	<? if (is_single()): ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=314097502035233";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>		
	<script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};

	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	<? endif; ?>

	<script>
	    var _gaq=[['_setAccount','UA-15657555-4'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src='//www.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>