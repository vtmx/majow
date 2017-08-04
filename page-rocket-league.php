<?php get_header(); ?>

<?php
	// WP_Query arguments
	$args = array(
		'post_type'      => 'videos',
		'orderby'        => 'date',
		'paged'          => $paged,
		// ou 'paged'    => get_query_var('paged'),
		'posts_per_page' => 3,

		'tax_query' => array(
			array(
				'taxonomy' => 'games',
				'field'    => 'slug',
                'terms'    => 'rocket-league'
			)
		)
	);

	// The Query
	$query = new WP_Query( $args );
?>

<?php include_once( 'loop-videos.php' ); ?>
<?php include_once( 'pagination.php' ); ?>

<?php get_footer(); ?>
