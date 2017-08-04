<?php get_header(); ?>

<?php
	// WP_Query arguments
	$args = array(
		'post_type'      => 'videos',
		'orderby'        => 'date',
		'paged'          => $paged,
		'posts_per_page' => 4,

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

<?php include_once( 'loop-videos.php' ); ?>
<?php include_once( 'pagination.php' ); ?>

<?php get_footer(); ?>
