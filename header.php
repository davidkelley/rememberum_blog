<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">

    <link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory');?>/icon.144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory');?>/icon.114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory');?>/icon.72x72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory');?>/icon.57x57.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/icon.57x57.png">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/grid.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">

    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/icon.144x144.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">

    <meta name="apple-mobile-web-app-capable" content="no">

    <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
    <script>(function(a){a.themeDir='<?php bloginfo('template_directory');?>'})(window)</script>
    <script data-main="<?php bloginfo('template_directory');?>/js/main" src="<?php bloginfo('template_directory');?>/js/components/require.js"></script>

    <? if (is_single()): ?>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <? endif; ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <? $max = 6; ?>
    <? $args = array('orderby' => 'id', 'hide_empty' => 0, 'parent' => 0); ?>
    <? $categories = array_slice(get_categories($args), 0, $max + 1); ?>

    <? 
        $cat_id = null; $active_category = '';
        if (is_category()) $active_category = single_cat_title('',false);
    ?>

    <header>
    	<div id="network">
	    	<div class="container clearfix">
	    		<div class="col3">
	    			<a title="To Blog Homepage" href="<?= site_url(); ?>"><img id="logo" src="<?php bloginfo('template_directory');?>/images/logo.png" /></a>
	    		</div>
	    		<ul id="network-menu" class="push3 col6">
	    			<li><a href="http://rememberum.com/contact">Contact</a></li>
	    			<li><a href="http://rememberum.com/faq">FAQ</a></li>
	    			<li><a href="http://rememberum.com/about">About</a></li>
	    			<li><strong>Blog</strong></li>
	    			<li><a href="http://rememberum.com/signup">Create</a></li>
	    			<li><a href="http://rememberum.com/login">Login</a></li>
	    		</ul>
	    	</div>
    	</div>
    	<div class="container clearfix">
    		<nav class="col9">
    			<ul class="clearfix">
    				<? foreach($categories as $category): ?>
    				<? if ($category->slug != 'uncategorized'): ?>
    				<li <? if ($active_category == $category->name): ?>class="active"<? endif; ?>>
                        <a data-id="<?= $category->slug ?>" href="<?= get_category_link( $category->term_id ) ?>"><?= $category->name ?></a>
                    </li>
    				<? endif; ?>
    				<? endforeach; ?>
    			</ul>
    		</nav>
			<form class="search-form col3" method="get" action="<?= site_url(); ?>">
				<div id="search-inputs">
					<input type="text" placeholder="Search Rememberum" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Search">
				</div>
			</form>
    	</div>
    	<div id="sub-menus">
    		<? foreach($categories as $category): ?>
    		<? if ($category->slug != 'uncategorized'): ?>
			<? $children = get_categories(array('orderby' => 'name', 'hide_empty' => 0, 'child_of' => $category->cat_ID)); ?>
			<? $i = 0; $rows = 8; ?>
			<div id="sub-menu-<?= $category->slug ?>" class="sub-menu container clearfix">
			<? foreach($children as $child): ?>
			<? if ($i%$rows == 0): ?><ul class="col4"><? endif; ?>
			<li><a href="<?= get_category_link( $child->term_id ) ?>"><?= $child->name; ?></a></li>
			<? if ($i%$rows == $rows - 1): ?></ul><? endif; ?>
			<? $i++; ?>
			<? endforeach; ?>
			</div>
    		<? endif; ?>
    		<? endforeach; ?>
    	</div>
    	<div class="wrapper">
	    	<div id="join-cta" class="container clearfix">
	    		<div class="col12">
	    			<div class="clearfix">
		    			<h2 class="col9">Create a Free Online Memorial with <strong>Rememberum</strong></h2>
		    			<a href="http://rememberum.com/signup" class="btn">Create Yours Now</a>
		    		</div>
	    		</div>
	    	</div>
    	</div>
    </header>

<div id="content" role="content" class="container clearfix">
            
