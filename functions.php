<?php

	//
	// Theme support
	// -----------------------------------------------------------------------------
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'html5', array( 'caption', 'comment-list', 'comment-form', 'gallery', 'search-form' ));
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );


	//
	// Editor Style
	// -----------------------------------------------------------------------------
	add_editor_style( 'dist/css/wp-editor.css' );

	//
	// Disable jQuery Migrate
	// -----------------------------------------------------------------------------
	add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
	function remove_jquery_migrate( &$scripts) {
		if(!is_admin()) {
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
		}
	}

	//
	// Disable Emoji Style
	// -----------------------------------------------------------------------------
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Menu
	// ----------------------------------------------------------------------
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'majow' ),
	) );

?>
