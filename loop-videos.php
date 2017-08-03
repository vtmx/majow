<?php if ( $query->have_posts() ): ?>
	<div class="gallery gallery-columns-4">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<a class="gallery-item" href="<?php the_permalink(); ?>">
				<img class="gallery-img" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>">
				<h2 class="gallery-caption"><?php the_title(); ?></h2>
			</a>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div> <!-- .gallery -->
<?php endif; ?>
