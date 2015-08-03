<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php $args = array(
        'menu' => 3,
        'container_class' => 'head-menu',
        'menu_id' => 'head-menu'
    );?>
    <div id="main-nav">
        <div class="overlay"></div>
        <div class="inside">
            <?php wp_nav_menu( $args );?>
        </div>
    </div>

    <div id="header">
        <div class="inside">
            <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sonitus-acoustics.png" alt="Logo" class="logo">
                </a>
            <a href="#" class="menu-btn">Меню<span></span></a>
        </div>
    </div>

	<div id="content" class="site-content">
