<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();  ?>

    <div class="sorteios m">
        <h2><?php the_title(); ?></h2>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
