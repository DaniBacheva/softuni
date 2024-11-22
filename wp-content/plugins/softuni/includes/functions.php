<?php

/** 
* This is a callback function to display the portfolio title with shortcut
*
* @return void
*/

function display_portfolio_title( $atts ) {
   // return get_the_title( 74 ); 
 
    $atts = shortcode_atts( array(
        'id'   => 'id',

    ), $atts, 'bartag' );
    return get_the_title( $atts['id'] ); 

}

add_shortcode( 'display_portfolio_title', 'display_portfolio_title' );