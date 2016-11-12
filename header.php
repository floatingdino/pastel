<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<!--
This site created by Sam Haakman
http://samhaakman.com
-->
<head>
                    <!-- TODO: PAGE TITLE -->
<link rel="icon" href="">              <!-- TODO: FAVICON -->

<meta name="description" content="">   <!-- TODO: META DESCRIPTION -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
</head>
<body <?php body_class();?>>
   <?php if (!is_page_template('front.php')){ ?>
<header>
<a href="/"><img class="logo" src="/wp-content/themes/pastel/samhaakman.svg"></a>
<?php wp_nav_menu(array('theme_location'=> 'header-menu'));?>
</header>
<?php } ?>
