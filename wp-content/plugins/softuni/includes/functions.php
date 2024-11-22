<?php

/** 
* This is a callback function to display the portfolio title with shortcut
*
* @return void
*/

function display_portfolio_title( $id=0 ) {
    return get_the_title( 74 ); 
}

add_shortcode( 'display_portfolio_title', 'display_portfolio_title' );