<?php
/**
 * Template Name: Event Information - Location
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('event_location')){ //if the field is not empty
				echo get_field('event_location'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
