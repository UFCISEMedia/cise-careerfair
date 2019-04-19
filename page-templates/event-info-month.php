<?php
/**
 * Template Name: Event Information - Month
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('event_month')){ //if the field is not empty
				echo get_field('event_month'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
