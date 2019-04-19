<?php
/**
 * Template Name: Event Information - Company Marketing
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

	  <?php 
			if(get_field('company_marketing_deadline')){ //if the field is not empty
				echo get_field('company_marketing_deadline'); //display it
			} 
		?>
	
    <?php endwhile; // End of the loop. ?>
