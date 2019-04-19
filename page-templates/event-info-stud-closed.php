<?php
/**
 * Template Name: Event Information - Student Closes
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('student_registration_closes')){ //if the field is not empty
				echo get_field('student_registration_closes'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
