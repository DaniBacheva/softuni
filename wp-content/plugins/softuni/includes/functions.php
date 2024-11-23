<?php

/**
 * This is the assets function where we'll enqueue our scripts and styles
 *
 */
function softuni_plugin_enqueue_assets() {
	wp_enqueue_script(
        'softuni-script',
        plugins_url( '../assets/scripts/scripts.js', __FILE__ ),
        array(),
        1.0
    );
    // wp_localize_script(
    //     'ajax-script',
    //     'my_ajax_object',
    //     array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    // );
}
add_action( 'wp_enqueue_scripts', 'softuni_plugin_enqueue_assets' );


/**
 * This is our dynamic function that handles the AJAX Upvote
 *
 * @return void
 */
// function softuni_portfolio_upvote() {
//     // @TODO: add a cookie check for froud preventing
//     $id = esc_attr( $_POST['porftolio_id'] );
//     $upvote_number = get_post_meta( $id, 'votes', true );
//     if ( empty( $upvote_number ) ) {
//         $upvote_number = 0;
//     }
//     update_post_meta( $id, 'votes', $upvote_number + 1 );
// }
// add_action( 'wp_ajax_nopriv_softuni_portfolio_upvote', 'softuni_portfolio_upvote' );
// add_action( 'wp_ajax_softuni_portfolio_upvote', 'softuni_portfolio_upvote' );



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