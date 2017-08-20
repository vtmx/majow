<?php get_header(); ?>

<?php
	// A Paginação é influênciada pelo Admin do Wordpress deixar 6
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	// WP_Query arguments
	$args = array(
		'post_type'      => 'videos',
		'orderby'        => 'date',
		'paged'          => $paged,
		'posts_per_page' => 24,

		'tax_query' => array(
			array(
				'taxonomy' => 'games',
				'field'    => 'slug',
                'terms'    => $term->slug
			)
		)
	);

	// The Query
	$query = new WP_Query( $args );
?>

<?php include_once( 'loop-videos.php' ); ?>
<?php include_once( 'pagination.php' ); ?>

<?php get_footer(); ?>
