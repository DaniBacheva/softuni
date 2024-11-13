<?php

/**
 * Plugin Name:Softuni Practice
 * Author: Dani Nikolova
 * Description: Softuni Playgraund
 */

//var_dump ("hello");
//echo "hello from my plugin";

/**
 * Changing title of the post
 * 
 * @param [type] $title
 * @return void
 */

// function changing_the_title( $title ) {
//     if (is_admin ()) {
//         return $title;
//     }
//     return 'The title of ' . $title . ' has been changed' ;
// }

// add_filter( 'the_title', 'changing_the_title');

/**
 * Test function to display greetings message
 * 
 */
// function add_greetings ( ) {
//     echo 'hello from plugin';
// }

// add_action ('admin_init', 'add_greetings');

/**
 * changing background color
 */

 function change_background () {
  ?>   <style>
     body {
         background: red !important;
    }
 </style>
  <script>
     alert ('haha');
    </script>
 <?php
}

//add_action ('init', 'change_background');


// function change_with_assets () {

//     $plugin_dir = plugin_dir_url ( __FILE__);
//     // var_dump ($plugin_dir);
//     // die();

//     wp_enqueue_style ( 'custom-css-edited' , $plugin_dir. '/assets/styles/style.css' , array(), '1.0.1');
//     wp_enqueue_script ( 'custom-script' , $plugin_dir. '/assets/scripts/script.js' , array ( 'jquery'));
// }

// add_action( 'admin_enqueue_scripts', 'change_with_assets' );

// function add_body_class ( $classes ) {
//     if ( get_the_ID () == '11') {
//         $classes[]='my-custom-class';
//     }

//     return $classes;
// }

// add_filter ( 'body_class', 'add_body_class');


//function softuni_custom_loop ( $content) {
    // $arg = array(
    //     'post_type'       =>'post',
    //     'post_status'     =>'publish',
    //     'posts_per_page'   =>5,
    // );
    // $related_posts = new WP_Query ( $arg );

    // if ( $related_posts -> have_posts() ) {
    //     while( $related_posts -> have_posts() ) {
    //         $related_posts -> the_post(); 

    //         var_dump( 'hello' );
    //     }
    // }

    //return $content;

    //var_dump ($arg);
    //var_dump ( $related_posts );
//}

//add_filter( 'the_content' , 'softuni_custom_loop');



// function change_content ( $content ) {
    
        //var_dump ($content);
//         $content = $content . '<div>test div</div>';
//         return $content;
//     }

// add_filter( 'the_content' , 'change_content');



function softuni_custom_loop () {

    $current_post_id = get_the_ID ();
    $arg = array(
        'post_type'       =>'page',
        'post_status'     =>'publish',
        'posts_per_page'  => 5,
        'post__not_in'     =>array ( $current_post_id )    
    );

    $content = '';

    $related_posts = new WP_Query ( $arg );
    ?>
    <?php if ( $related_posts -> have_posts() ) : ?>
        <ul> 
            <?php while ( $related_posts -> have_posts() ) : ?>
                <?php $related_posts -> the_post(); ?>
                    <li><a href='<?php echo get_the_permalink(); ?>'><?php echo get_the_title(); ?></li>
            <?php endwhile; ?>
        </ul>
     <?php endif; ?>
     <?php
    
     return $content;
    

 }

 function change_content ( $content ) {
    $related_posts = softuni_custom_loop();

    //var_dump ($related_posts);
 
    return $content;
}
    
add_filter( 'the_content' , 'change_content');


//softuni_custom_loop ();
  