<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Bootscore
	 */
	
?>
    
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capace</title>
    <?php wp_enqueue_script("jquery"); ?>
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

<div id="to-top"></div>

<div id="page" class="site">

    <header id="masthead" class="site-header">

        <?php
            get_template_part('template-parts/nav');

        ?>

</header><!-- #masthead -->
    
