<?php get_header(); ?>

<?php
	// WP_Query arguments
	// A Paginação é influênciada pelo Admin do Wordpress deixar 24
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array(
		'post_type'      => 'calendarios',
		'orderby'        => 'date',
		'paged'          => $paged,
		'posts_per_page' => 24,
	);

	// The Query
	$query = new WP_Query( $args );
?>


<?php if ( $query->have_posts() ): ?>
	<h2 class="align-center mt tu tc fxxlarge">Calendários</h2>
	<div class="page-calendarios mtb">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php endif; ?>

<?php include_once( 'pagination.php' ); ?>


<?php get_footer(); ?>
