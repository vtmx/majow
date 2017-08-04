<?php get_header(); ?>

<?php // Get repeater field home-slide  ?>
<?php $slide = get_field( 'home-slide' ); ?>

<?php if ( have_rows( 'home-slide' ) ): ?>
	<div class="slide">
		<div class="slide-container">
			<?php while( have_rows( 'home-slide') ): the_row(); ?>

				<?php // Get vars ?>
				<?php $slide_img = get_sub_field('home-slide-img'); ?>
				<?php $slide_link = get_sub_field('home-slide-link'); ?>

				<?php if ( $slide_img ): ?>
					<div class="slide-item">
						<a href="<?php echo $slide_link; ?>"><img src="<?php echo $slide_img['url'];  ?>" alt="<?php echo $slide_img['url']; ?>"></a>
					</div>
				<?php endif; ?>

			<?php endwhile; ?>
		</div><!-- slide-container -->

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
