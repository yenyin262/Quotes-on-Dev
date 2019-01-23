<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site max-width-container">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class ="quotesDevLogo" src="<?php echo get_template_directory_uri() . '/images/qod-logo.svg' ?> " alt="quotes on dev logo."/></a>
 				<!-- <h1 class="site-title screen-reader-text"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?></a></h1> -->
				</div><!-- .site-branding -->
			</header><!-- #masthead -->
			
<div class ="quoteSection">
	<i class="fas fa-quote-left fa-7x"></i>	<div id="content" class="site-content"> 
