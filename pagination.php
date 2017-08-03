<?php if( function_exists('wp_pagenavi') ) : ?>
	<div class="pagination">
		<?php wp_pagenavi( array( 'query' => $query ) ); ?>
	</div>
<?php endif; ?>
