<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class('gridlock main shifter'); ?> data-speed="1.75">

<div id="wrapper" class="shifter-page">

<header id="head">
  <nav class="row">
    <?php wp_nav_menu( array( 'theme_location'=>'main-menu','items_wrap'=> '%3$s','container_class'=>'menu desktop-9 tablet-hide mobile-hide','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
    <div class="desktop-3 tablet-6 mobile-3 social text-right">
    	<a href="http://instagram.com/bringingbackbroadway">#nightonbroadway</a>
    	<span class="target show-mobile" data-swap-target=".toggle">Menu</span>
    </div>
  </nav>
</header>

<section id="content"><div>
<div <?php body_class(); ?>>

