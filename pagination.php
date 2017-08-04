<?php if( function_exists('wp_pagenavi') ) : ?>
	<?php wp_pagenavi( array( 'query' => $query ) ); ?>
<?php endif; ?>
