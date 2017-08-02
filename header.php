<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Metas  -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.min.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<a class="skip-content screen-reader-text" href="#content">Pular para conteúdo</a>

	<header class="header">
		<nav class="navbar container">
			<h1 class="navbar-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-majow.svg" alt="Logo do Majow"></a>
			</h1>

			<button class="navbar-toggle" aria-expanded="false"></button>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container'      => 'ul'
				) );
			?>
		</nav>
	</header><!-- .header -->

	<main id="content" class="main content container container-translucent">
