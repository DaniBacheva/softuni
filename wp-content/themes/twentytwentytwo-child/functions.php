<?php
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_enqueue_styles' );

function twentytwentytwo_child_enqueue_styles() {
	wp_enqueue_style( 
		'twentytwentytwo-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}