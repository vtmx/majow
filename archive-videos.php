<?php get_header(); ?>
<?php
	// WP_Query arguments
	// A Paginação é influênciada pelo Admin do Wordpress deixar 24
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array(
		'post_type'      => 'videos',
		'orderby'        => 'date',
		'paged'          => $paged,
		// ou 'paged'    => get_query_var('paged'),
		'posts_per_page' => 24,
	);

	// The Query
	$query = new WP_Query( $args );
?>

<?php include_once( 'loop-videos.php' ); ?>
<?php include_once( 'pagination.php' ); ?>

<?php get_footer(); ?>
