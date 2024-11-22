<?php

/** 
* This is a callback function to display the portfolio title with shortcut
*
* @return void
*/

function display_portfolio_title( $atts ) {
   // return get_the_title( 74 ); 
 
    $atts = shortcode_atts( array(
        'id'         => 'id',
        'show_image' => 'show_image'
    ), $atts, 'bartag' );

    if ( ! empty( $atts['id'] ) ){
        $title = get_The_title( $atts['id'] );
    }

    if ( ! empty( $atts['show_image'] ) ) {
        $image = get_the_post_thumbnail_url( $atts['id'] );
    }

    $content = '<div class="shortcode-class">';

    if ( ! empty( $title) ) {
        $content .=$title;
    }

    if ( ! empty( $image ) ) {
        $content .= '<img src="'. $image .'">';
    }

    $content .= '</div>';

    //var_dump( $image)

    return $content; 

}

add_shortcode( 'display_portfolio_title', 'display_portfolio_title' );