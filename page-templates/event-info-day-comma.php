<?php
/**
 * Template Name: Event Information - Day Comma
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('event_day')){ //if the field is not empty
				echo get_field('event_day') . ','; //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
