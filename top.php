<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	     Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title('|',true,'right'); ?> <?php bloginfo( 'name' ); ?></title>
	  
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('admin_email'); ?>">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">


	<!-- Keeping the HTML5 Boilerplate directory structure, the root level style.css is here to satisfy wordpress only. -->
	<!-- CSS: implied media="all" -->  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	
	<style>
		html, body, div, span, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp,
		small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, figcaption, figure,
		footer, header, hgroup, menu, nav, section, summary,
		time, mark, audio, video  
		{ 
	    	font-family: 
			<?php 
				$options = get_option('theme_options');
				$optionValue =  $options['css_font_stack'];
				
				if ($optionValue == "Microsoft") {
					?>"Segoe UI", Segoe, Tahoma, Geneva, sans-serif;<?php 
				} elseif ($optionValue == "Yahoo") {
					?>Arial, sans-serif;<?php 
				} elseif ($optionValue == "I Love Typography") {
					?>Cambria, Georgia, serif;<?php 
				} elseif ($optionValue == "Jon Tangerine") {
					?>Baskerville, Garamond, Palatino, "Palatino Linotype", "Hoefler Text", "Times New Roman", serif;<?php 
				} elseif ($optionValue == "Sushi & Robots") {
					?>"Hoefler Text", Garamond, Baskerville, "Baskerville Old Face", "Times New Roman", serif;<?php 
				} else {
					?>"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Tahoma, sans-serif;<?php 
				}
			?> 
		}
	</style>

	<!-- Wordpress functionality styled in this file. A lot of blank classes are defined therein. -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/wordpress.css">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="<?php bloginfo('template_url'); ?>/css/handheld.css">  -->

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-1.7.min.js"></script>

</head>
<body>
	<div id="container">
	    <nav id="breadcrumbs"></nav>
	
		<div id='header-container'>
			<div id='left-header'>
				<hgroup>
					<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</hgroup>
			</div>
	
			<div id='right-header'>
		        <?php get_search_form(); ?>
			</div>
	
	 		<div class='clearfix'>
				<nav id="top-page-list">
					<ul><?php wp_list_pages('title_li='); ?></ul>
				</nav>
				<nav id="top-pagination">
					     <?php next_posts_link('&laquo; Previous Page') ?>
					     <?php previous_posts_link('Next Page &raquo;') ?>
				</nav>
			</div>
		</div>
	
	    <div id="main" role="main">
