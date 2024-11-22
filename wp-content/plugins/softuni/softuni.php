<?php

/*
 * Plugin Name: Softuni
 * Author: Dani Nikolova    
 * Description : my plugin for the course
 * Version: 0.1
 */

 //echo 'Hello from my plugin';

 if ( ! defined( 'SOFTUNI_PLUGIN_VERSION' ) ) {
    define( 'SOFTUNI_PLUGIN_VERSION', '0.1' );
}
if ( ! defined( 'SOFTUNI_PLUGIN_ASSETS_URL' ) ) {
    define( 'SOFTUNI_PLUGIN_ASSETS_URL',  plugin_dir_url( __FILE__ ) . 'assets' );
}

 require 'includes/cpt-portfolio.php';
 require 'includes/cpt-testimonial.php';
 require 'includes/functions.php';