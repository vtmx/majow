<?php get_header(); ?>

<?php
// WP_Query arguments
$args = array(
	'post_type' => 'videos',
	'orderby'   => 'date',
	'tax_query' => array(
		array(
			'taxonomy' => 'streaming',
			'field'    => 'slug',
			'terms'    => 'youtube'
		)
	)
);

// The Query
$query = new WP_Query( $args );
?>

<div class="gallery gallery-columns-4">
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
            <a class="gallery-item" href="<?php the_permalink(); ?>">
                <img class="gallery-img" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>">
                <h2 class="gallery-caption"><?php the_title(); ?></h2>
            </a>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
