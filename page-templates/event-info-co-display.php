<?php
/**
 * Template Name: Event Information - Company Display
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('company_display_items')){ //if the field is not empty
				echo get_field('company_display_items'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
