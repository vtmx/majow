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
	$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
	$args = array(
		'post_type'      => 'videos',
		'orderby'        => 'date',
		'posts_per_page' => 8
	);

	// The Query
	$query = new WP_Query( $args );
?>

<?php include_once( 'loop-videos.php' ); ?>

<?php get_footer(); ?>
