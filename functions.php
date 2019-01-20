<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
 wp_enqueue_style( 'screen', get_template_directory_uri() . '/stylesheets/screen.css', array(), '1.1', 'all');
 wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');

 
   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )
{
     global $post;

     // Check for single page and image post type and remove
     if ( is_single() && $post->post_type == 'image' )
          remove_filter('the_content', 'wpautop');

     return $content;
}


