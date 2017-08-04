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
	<h2 class="mt-large mb-large tac tu fs-xxlarge">Calendários</h2>
	<div class="page-calendarios">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<a class="button" href="<?php the_permalink(); ?>"><i class="material-icons">date_range</i> <?php the_title(); ?></a>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<?php include_once( 'pagination.php' ); ?>
<?php endif; ?>


<?php get_footer(); ?>
