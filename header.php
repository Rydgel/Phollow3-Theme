<!doctype html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="fr"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="fr"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="fr"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="fr" dir="ltr"><!--<![endif]-->
<head id="phollow-fr" data-template-set="html5-phollow-wordpress-theme" profile="http://purl.org/uF/hAtom/0.1/ http://purl.org/uF/2008/03/">

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
	<meta name="title" content="<?php wp_title(''); ?>">
	<meta name="author" content="Jérôme Mahuet">
	<meta name="Copyright" content="Copyright Jérôme Mahuet 2011. All Rights Reserved.">
	<meta name="google-site-verification" content="">
	
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	
	<!-- JavaScript at bottom except for Modernizr -->
  <script src="<?php bloginfo('template_directory'); ?>/javascripts/modernizr-2.0.6.min.js"></script>
  
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

	<div class="container">	
		<header role="banner" id="header-site" class="sixteen columns">
		  <h1 id="logo" class="four columns alpha">
		    <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ) ?>"><?php bloginfo( 'name' ) ?></a>
		  </h1>
		  <nav id="nav-header" class="twelve columns omega">
		    <ul>
		      <li><a target="_blank" title="Phollow Archives" href="#">Archives</a></li>
		      <li><a target="_blank" title="e-mail" href="mailto:xxxx@xxx.com">Contact</a></li>
		      <li><a target="_blank" title="@xxxxx" href="http://twitter.com/@xxxxx">Twitter</a></li>
		      <li><a target="_blank" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="http://feeds2.feedburner.com/xxxxx" target="_blank">RSS feed</a></li>
		    </ul>
		  </nav>
			<hr>
		</header>