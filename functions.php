<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );

/**
  *  Enqueue scripts
  */
  
function roboxits_enqueue_scripts() {
	/** Google fonts **/
	
	/** js **/
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}

add_action('wp_enqueue_scripts', 'roboxits_enqueue_scripts');

?>