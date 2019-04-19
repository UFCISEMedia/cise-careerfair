<?php
/**
 * Template Name: Event Information - Semester
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('event_semester')){ //if the field is not empty
				echo get_field('event_semester'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
