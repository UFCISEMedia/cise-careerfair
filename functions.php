<?php
/**
 * UF HWCOE Child theme example functions and definitions.
*
*/

function hwcoe_ufl_child_scripts() {
	
	//enqueue parent stylesheet
	$parent_style = 'hwcoe-ufl-style'; 

	wp_enqueue_style( $parent_style, 
		get_template_directory_uri() . '/style.css', 
		['bootstrap', 'prettyPhoto'],
		wp_get_theme('hwcoe-ufl')->get('Version')
	);
	
	wp_enqueue_style( 'hwcoe-ufl-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		get_theme_version() 
	);

    wp_enqueue_script('hwcoe-ufl-child-scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), get_theme_version(), true);
	
}
add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_scripts' );

// Custom Function to Include
if ( !function_exists( 'hwcoe_ufl_child_icon_url' ) ) {

	function hwcoe_ufl_child_icon_url() {
		if ( empty($url) ){
			$url = get_stylesheet_directory_uri() . '/favicon.png';
		}
		return $url;
	}
	add_filter( 'get_site_icon_url', 'hwcoe_ufl_child_icon_url' );
}