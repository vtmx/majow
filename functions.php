<?php

	// Add title-tag.
	add_theme_support( 'title-tag' );

	// Add post-thumbnail.
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'gallery',
		'caption',
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'majow' ),
	) );

?>
