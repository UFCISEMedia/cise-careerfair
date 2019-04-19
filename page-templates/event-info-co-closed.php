<?php
/**
 * Template Name: Event Information - Company Closed
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('company_registration_closes')){ //if the field is not empty
				echo get_field('company_registration_closes'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
