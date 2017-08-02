<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.min.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Pular para conteúdo</a>

	<header id="masthead" class="site-header header">
		<h1 class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-majow.svg" alt="Logo do Majow"></a>
		</h1> <!-- .site-branding -->

		<nav id="site-navigation" class="site-nav nav main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'majow' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- .site-nav -->
	</header><!-- .site-header -->

	<div id="content" class="site-content content">
