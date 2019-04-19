<?php
/**
 * Template Name: Event Information - Student Opens
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('student_registration_opens')){ //if the field is not empty
				echo get_field('student_registration_opens'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
