<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Metas  -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.min.css">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

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

			<div class="social-links">
				<a target="_blank" class="youtube" title="Canal do Majow no Youtube" href="https://www.youtube.com/user/majoraw"></a>
				<a target="_blank" class="twitch" title="Canal do Majow no Twitch" href="https://www.twitch.tv/majowww"></a>
				<a target="_blank" class="discord" title="Discord do Majow" href="https://discordapp.com/invite/Majowww"></a>
				<a target="_blank" class="twitter" title="Twitter do Majow" href="https://twitter.com/MajowYoutube"></a>
				<a target="_blank" class="steam" title="Grupo do Majow na Steam" href="https://steamcommunity.com/groups/majowww"></a>
			</div>
		</nav>
	</header><!-- .header -->

	<main id="content" class="main container translucent clearfix">
