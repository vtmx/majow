<?php get_header(); ?>

<?php
    // Criar variaveis.
    $days = get_field('calendar-days');
    $day = array();

    // Popular o array para servir mais tarde.
    foreach( $days as $i => $row ) {
        $day[ $i+1 ] = $row['calendar-day'];
    }
?>

<table class="calendar mb">
    <caption class="mt-large mb-large">
		<h2>Calendário</h2>
		<div><?php the_title(); ?></div>
	</caption>

    <?php for( $i = 1; $i <= 35; $i++ ): ?>
        <?php if ( $i == 1 ): ?>
            <tr>
        <?php endif; ?>

		<?php if ( $i <= 31 ): ?>
            <td>
                <div class="day"><?php echo $i; ?></div>

                <?php while( have_rows('calendar-days') ): the_row(); ?>
					<?php if ( $i == get_sub_field('calendar-day') ): ?>
						<div class="events" style="background: <?php echo the_sub_field('calendar-color'); ?>">
							<?php echo the_sub_field('calendar-event'); ?>
						</div>
					<?php endif; ?>
                <?php endwhile; ?>

			</td>
		<?php else: ?>
			<td>
			    <!-- <div class="day"></div> -->
			</td>
		<?php endif; ?>

		<?php if ( $i % 7 == 0 && $i != 35  ): ?>
			</tr><tr>
		<?php elseif ( $i == 35 ): ?>
			</tr>
		<?php endif; ?>

    <?php endfor; ?>
</table>

<div class="tac">
    <a href="<?php echo esc_url( home_url( '/calendarios' ) ); ?>" class="button"><i class="material-icons">date_range</i> Ver todos os calendários</a>
</div>

<?php get_footer(); ?>
