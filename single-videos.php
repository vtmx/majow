<?php get_header(); ?>

<div class="video-grid p">

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="video">
			<?php $terms = get_the_terms( $post->id, 'streaming' ); ?>
			<?php foreach( $terms as $term ) {} ?>
			<?php $tax = $term->slug; ?>

			<div class="video-frame">
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

			<div class="video-info">
				<h2 class="video-title"><?php the_title(); ?></h2>
				<div class="video-description"><?php the_content(''); ?></div>
			</div>
		</div><!-- .video -->
	<?php endwhile; ?>

	<div class="vrelated">
		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds Pulando do Avião</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>

		<a class="vrelated-item" href="#">
			<img class="vrelated-img" src="https://dummyimage.com/320x180/222222/656565.png" alt="Vídeo Related">
			<h3 class="vrelated-title">[Aula 01] O Mapa e Pulando do Avião - PlayerUnknown's Battlegrounds</h3>
		</a>
	</div><!-- vrelated -->
</div>

<?php get_footer(); ?>
