<?php

function sopcResources() {
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
  wp_enqueue_script( 'bootstrap-js' );
  wp_enqueue_style( 'bootstrap-css' );
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sopcResources');

remove_filter('the_content', 'wpautop');
