<?php
/**
 * Template Name: Event Information - Year
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('event_year')){ //if the field is not empty
				echo get_field('event_year'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
