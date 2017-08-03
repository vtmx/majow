<?php get_header(); ?>
<div class="page page-404 p align-center">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/404.png" alt="Erro 404">

    <h2>
        Essa página não existe, retorne ao <a href="<?php echo esc_url( home_url( '/' ) ); ?>">início</a>.
    </h2>
</div>
<?php get_footer(); ?>
