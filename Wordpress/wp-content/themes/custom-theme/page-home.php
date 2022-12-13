<?php
/**
 * Template name: Pradzia
 */

get_header();
?>
<div class = "container mt-5">
		<div class = "row mb-5">
	<?php
		$loop = new WP_Query(
		array(
				'post_type' => 'trips',
				'orderby' => 'post_id',
				'order' => 'DESC',
			)
			);

		if ($loop->have_posts()) {
			while ($loop->have_posts()) {
				$loop->the_post();
				echo '<div class="col-3">';
				echo '<img src='. get_field('image').'> ';
				echo '<h5>' .get_field('name', get_the_ID()).'</h5>' ;
				echo 'Kada:    '.get_field('month', get_the_ID()).'<br>';
				echo 'Grupė: '.get_field('max_people_allowed', get_the_ID()).' žmonių. <br>';
				echo 'Trasos ilgis: '.get_field('distance', get_the_ID()).' km <br>' ;
				echo 'Ar galima su gyvūnais? '.get_field('with_animals', get_the_ID()).'<br> </p>' ;
				echo '<a href="'.get_the_permalink().'"> <button type="button" class="btn btn-outline-secondary mx-0 my-0">Skaityti daugiau</button></a>';
				echo '</div>';
				
			}
		}
		wp_reset_postdata();
	?>
	</div>
	</div>
