<?php

function miplantilla_estilos() {
    wp_enqueue_style( 'miplantilla-estilos', get_stylesheet_uri() ); 
   
    wp_enqueue_style( 'miplantilla-estilos-bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css" ); 
   
    wp_enqueue_style( 'miplantilla-estilos-animate', get_template_directory_uri() .  "/css/animate.css" ); 

    wp_enqueue_style( 'miplantilla-estilos-style', get_template_directory_uri() .  "/css/style.css" ); 

}
add_action( 'wp_enqueue_scripts', 'miplantilla_estilos' );




function miplantilla_javascripts() {
   
    wp_enqueue_script( 'miplantilla-js-jquery', get_template_directory_uri() . "/js/jquery.min.js", $deps = array(), $ver = false, $in_footer = true ); 
    

    wp_enqueue_script( 'miplantilla-js-bootstrap', get_template_directory_uri() .  "/js/bootstrap.min.js", $deps = array(), $ver = false, $in_footer = true ); 
    

    wp_enqueue_script( 'miplantilla-js-animate', get_template_directory_uri() .  "/js/animate.js", $deps = array(), $ver = false, $in_footer = true ); 

 	wp_enqueue_script( 'miplantilla-js-fontawesome', get_template_directory_uri() .  "/js/fontawesome.js", $deps = array(), $ver = false, $in_footer = true ); 

 	//wp_enqueue_script( 'miplantilla-js-modernizr', get_template_directory_uri() .  "/js/modernizr-3.5.0.min.js", $deps = array(), $ver = false, $in_footer = true );

 	wp_enqueue_script( 'miplantilla-js-jquery-waypoints', get_template_directory_uri() .  "/js/jquery.waypoints.min.js", $deps = array(), $ver = false, $in_footer = true );







}
add_action( 'wp_enqueue_scripts', 'miplantilla_javascripts' );






















?>