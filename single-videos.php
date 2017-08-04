<?php get_header(); ?>

<div class="video-grid">

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="video">
			<?php $terms = get_the_terms( $post->id, 'streaming' ); ?>
			<?php foreach( $terms as $term ) {} ?>
			<?php $tax = $term->slug; ?>

			<div class="video-frame mb">
				<iframe
					<?php if ( $tax == 'youtube' ): ?>
						src="https://www.youtube.com/embed/<?php the_field('video-id'); ?>"
					<?php elseif ( $tax == 'twitch' ): ?>
						src="https://player.twitch.tv/?video=v<?php the_field('video-id'); ?>&autoplay=false"
					<?php endif; ?>
					width="752"
					height="423"
					frameborder="0"
					scrolling="no"
					allowfullscreen>
				</iframe>
			</div>

			<div class="video-info ml mb">
				<h2 class="video-title"><?php the_title(); ?></h2>
				<div class="video-description"><?php the_content(''); ?></div>
			</div>
		</div><!-- .video -->
	<?php endwhile; ?>


	<?php
		// Get array of terms
		$terms = get_the_terms( $post->ID , 'games' );

		// Pluck out the IDs to get an array of IDS
		$term_ids = wp_list_pluck( $terms, 'term_id' );

		// WP_Query arguments
		$args = array(
			'post_type'      => 'videos',
			'orderby'        => 'date',
			'paged'          => $paged,
			'posts_per_page' => 3,
			'post__not_in'   => array($post->ID),

			'tax_query' => array(
				array(
					'taxonomy' => 'games',
			        'field'    => 'term_id',
			        'terms'    => $term_ids
				)
			)
		);

		// The Query
		$query = new WP_Query( $args );
	?>

	<?php if ( $query->have_posts() ): ?>
		<div class="vrelated">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<a class="vrelated-item" href="<?php the_permalink(); ?>">
					<img class="vrelated-img" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>">
					<h2 class="gallery-caption"></h2>
					<h3 class="vrelated-title"><?php the_title(); ?></h3>
				</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- vrelated -->
	<?php endif; ?>
</div>

<?php get_footer(); ?>
