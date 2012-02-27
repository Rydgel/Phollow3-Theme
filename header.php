<!doctype html>
<!--[if IEMobile 7 ]><html itemscope itemtype="http://schema.org/Article" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html itemscope itemtype="http://schema.org/Article" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie6" lang="fr"><![endif]-->
<!--[if IE 7 ]><html itemscope itemtype="http://schema.org/Article" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie7" lang="fr"><![endif]-->
<!--[if IE 8 ]><html itemscope itemtype="http://schema.org/Article" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie8" lang="fr"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="fr" dir="ltr" itemscope itemtype="http://schema.org/Article" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head id="phollow-fr" data-template-set="html5-phollow-wordpress-theme" profile="http://purl.org/uF/hAtom/0.1/ http://purl.org/uF/2008/03/" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# phollow: http://ogp.me/ns/fb/phollow#">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
        <link href="https://plus.google.com/116513653525162928064" rel="publisher">
	<meta name="title" content="<?php wp_title(''); ?>">
        <?php if(is_single() || is_page()) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <meta name="description" content="<?php echo improved_trim_excerpt(); ?>">
        <?php endwhile; endif; else: ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="author" content="Jérôme Mahuet">
	<meta name="Copyright" content="Copyright Jérôme Mahuet 2011. All Rights Reserved.">
	<meta name="google-site-verification" content="b3k5NRe5t9U-Pk1_CK_g5oN0U12YXuc55rUQWCHgbZY">
        <?php if(is_single() || is_page()) : if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<meta property="og:title" content="<?php the_title() ?>">
  	<meta property="og:image" content="<?php echo catch_that_image() ?>">
  	<meta property="og:type" content="phollow:post">
  	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  	<meta property="fb:admins" content="rydgel">
  	<meta property="fb:app_id" content="101739241646">
  	<meta property="og:url" content="<?php the_permalink() ?>">
        <meta property="og:description" content="<?php echo improved_trim_excerpt(); ?>">
        <meta itemprop="name" content="<?php the_title() ?>">
        <meta itemprop="description" content="<?php echo improved_trim_excerpt(); ?>">
	<meta itemprop="image" content="<?php echo catch_that_image() ?>">
  	<?php endwhile; endif; endif; ?>
	
	<!-- Dublin Core Metadata : http://dublincore.org/ -->
  	<meta name="DC.title" content="<?php wp_title(''); ?>">
  	<?php if(is_single() || is_page()): if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <meta name="DC.subject" content="<?php echo improved_trim_excerpt(); ?>">
        <?php endwhile; endif; else: ?>
	<meta name="DC.subject" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>
  	<meta name="DC.creator" content="Jérôme Mahuet">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/base.css?v=2">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/skeleton.css?v=5">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=195">
	
	<!-- JavaScript at bottom except for Modernizr -->
  <script src="<?php bloginfo('template_directory'); ?>/javascripts/modernizr-2.0.6.min.js"></script>
  <!-- Typekit -->
	<script src="http://use.typekit.com/jfp7vgn.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">
	
	<!--iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">  
  
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>">
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo( 'rss_url' ); ?>">
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo( 'atom_url' ); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
<nav id="nav">
  <div class="container">
   <header class="sixteen columns">
     <h1 id="logo2" class="four columns alpha">
     	<a href="http://phollow.fr" title="Phollow me">Phollow me</a>
   		</h1>
   		<nav id="nav-header2" class="twelve columns omega">
      <ul>
      	<li><a title="Phollow Archives" href="/archives/">Archives</a></li>
      	<li><a target="_blank" title="e-mail" href="mailto:rydgel@phollow.fr">Contact</a></li>
      	<li><a target="_blank" title="@phollow" href="http://twitter.com/@phollow">Twitter</a></li>
      	<li><a target="_blank" title="Phollow me RSS Feed" href="http://feeds2.feedburner.com/phollow/iuEO">RSS feed</a></li>
      	</ul>
      	</nav>
   </header>
  </div>
</nav>
	<div class="container">	
		<header role="banner" id="header-site" class="sixteen columns">
		  <h1 id="logo" class="four columns alpha">
		    <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ) ?>"><?php bloginfo( 'name' ) ?></a>
		  </h1>
		  <nav id="nav-header" class="twelve columns omega">
		    <ul>
		      <li><a title="Phollow Archives" href="/archives/">Archives</a></li>
		      <li><a target="_blank" title="e-mail" href="mailto:rydgel@phollow.fr">Contact</a></li>
		      <li><a target="_blank" title="@phollow" href="http://twitter.com/@phollow">Twitter</a></li>
		      <li><a target="_blank" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="http://feeds2.feedburner.com/phollow/iuEO" target="_blank">RSS feed</a></li>
		    </ul>
		  </nav>
			<hr style="border-bottom: 1px solid rgba(0, 0, 0, 0.02);">
		</header>