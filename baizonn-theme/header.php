<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizonn-theme
 */
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
 </head>
 
 <body <?php body_class(); ?>>
 
 <!-- ======= Site Header Starts ======= -->
 <header class="site-header">
   <div class="container">
 
	 <!-- Site Logo or Title -->
	 <div class="site-branding">
	   <a href="<?php echo home_url(); ?>" class="site-logo">
		 <?php if ( has_custom_logo() ) : ?>
		   <?php the_custom_logo(); ?>
		 <?php else : ?>
		   <h1 class="site-title"><?php bloginfo('name'); ?></h1>
		 <?php endif; ?>
	   </a>
	 </div>
 
	 <!-- Navigation Menu -->
	 <nav class="main-navigation">
	   <?php
		 wp_nav_menu([
		   'theme_location' => 'main-menu',
		   'container' => false,
		   'menu_class' => 'nav-menu',
		   'fallback_cb' => false
		 ]);
	   ?>
	 </nav>
 
   </div>
 </header>
 <!-- ======= Site Header Ends ======= -->