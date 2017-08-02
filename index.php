<?php get_header(); ?>

<?php
	$slide_img = array(	get_field('home-slide-img-1'), get_field('home-slide-img-2'), get_field('home-slide-img-3') );
	$slide_link = array( get_field('home-slide-link-1'), get_field('home-slide-link-2'), get_field('home-slide-link-3') );
?>

<?php if ( $slide_img[0] && $slide_link[0] ): ?>
	<div class="slide">
		<div class="slide-container">
			<?php for ( $i = 0; $i < count($slide_img); $i++ ): ?>
				<?php if ( $slide_img[$i] && $slide_link[$i] ): ?>
					<div class="slide-item">
						<a href="<?php echo $slide_link[$i]; ?>"><img src="<?php echo $slide_img[$i]['url']; ?>" alt="<?php echo $slide_img[$i]['alt']; ?>"></a>
					</div>
				<?php endif; ?>
			<?php endfor; ?>
		</div>

		<div class="slide-arrows"></div>
		<div class="slide-dots"></div>
	</div><!-- .slide -->
<?php endif; ?>


<?php
	// WP_Query arguments
	$args = array(
		'post_type'      => 'videos',
		//'posts_per_page' => $works_count,
		'orderby'        => 'date'
	);

	// The Query
	$query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ): ?>
	<div class="gallery gallery-columns-4">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<a class="gallery-item" href="<?php the_permalink(); ?>">
				<img class="gallery-img" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>">
				<h2 class="gallery-caption"><?php the_title(); ?></h2>
			</a>
		<?php endwhile; ?>
	</div> <!-- .gallery -->

	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li class="current">2</li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul><!-- .pagination -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
