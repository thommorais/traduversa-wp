<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="dns-prefetch" href="//ajax.googleapis.com">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">

	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	<!-- <link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Montserrat" rel="stylesheet"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
			<nav class="menu">

				<?php get_template_part( '/template-parts/logo'); ?>

				<button type="button" class="hamburger">
					<i></i>
				</button>

				<ul>
            <li><a class="scroll" href="#about">SOBRE</a></li>
            <li><a class="scroll" href="#importance">Importância</a></li>
            <li><a class="scroll" href="#services">ServiçOS</a></li>
            <li><a class="scroll" href="#contact">CONTATO</a></li>
            <li><a class="scroll" href="#orcament">ORçamento</a></li>
        </ul>
			</nav>
	</header>
	<main>
