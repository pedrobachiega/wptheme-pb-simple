<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '' ); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/wp-defaults.css" />
<script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="Feed RSS" href="<?php bloginfo('rss2_url'); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">

  <header>
    <?php if ( is_home() ) { ?>
      <h1 id="blog-title">pedro bachiega's blog</h1>
    <?php } else { ?>
      <p id="blog-title">pedro bachiega's blog</p>
    <?php } ?>
    <p id="blog-desc">web, wordpress, mobile, development, ruby on rails, and other stuff</p>

    <nav>
      <ul class="menu-horizontal">
        <?php wp_list_pages('title_li=&depth=1&sort_column=menu_order'); ?>
      </ul>
    </nav>
    <hr />
  </header>
