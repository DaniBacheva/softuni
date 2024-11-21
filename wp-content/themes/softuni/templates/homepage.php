<?php

/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php
	get_template_part( 'partials/about', 'section' );
?>

<?php
	get_template_part( 'partials/portfolio' );
?>

<?php
	get_template_part( 'partials/services', 'section' );
?>	

<?php
	get_template_part( 'partials/subscribe', 'section' );
?>	
	
<?php softuni_display_latest_posts( 2 ); ?>

<?php
	get_template_part( 'partials/contact' );
?>

<?php
	get_template_part( 'partials/testimonial' );
?>

<?php get_footer(); ?>	
