<?php

get_header();
?>
<div class="container">
        <div class="row mb-3 mt-5" >
		<div class="col-4">
			<img src=" <?php echo get_field('image'); ?> ">
		</div>
		<div class="other-content col-4">
			<p> <b> <?php echo get_field('name'); ?> </b>  	</p>
			<p> <b> Kada: </b>  <?php echo get_field('month'); ?>	</p>
			<p> <b> Grupė: </b>  <?php echo get_field('max_people_allowed'); ?>	žmonių.</p>
			<p> <b> Trasos ilgis: </b>  <?php echo get_field('distance'); ?>	km</p>
			<p> <b> Ar galima su gyvūnais? </b>  <?php echo get_field('with_animals'); ?>	</p>
		</div>
		<div class="col-4"></div>
        </div>
		<div class="row mb-3 mt-5" >
		<p> <b> Detalesne informacija: </b> <br> 
		<?php echo get_field('about'); ?>	</p>	
		</div>
    </div>
