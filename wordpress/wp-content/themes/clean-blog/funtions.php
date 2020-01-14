<?php 

function miplantilla_estilos() {
    wp_enqueue_style( 'miplantilla-estilos', get_stylesheet_uri() ); 
    wp_enqueue_style( 'miplantilla-estilos-bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css" ); 
    wp_enqueue_style( 'miplantilla-estilos-clean', get_template_directory_uri() .  "/css/clean-blog.min.css" ); 
}
add_action( 'wp_enqueue_scripts', 'miplantilla_estilos' );



function miplantilla_javascripts() {

    wp_enqueue_script( 'miplantilla-js-jquery', get_template_directory_uri() . "/js/jquery.js", $deps = array(), $ver = false, $in_footer = true ); 
    wp_enqueue_script( 'miplantilla-js-bootstrap', get_template_directory_uri() .  "/js/bootstrap.min.js", $deps = array(), $ver = false, $in_footer = true ); 
    wp_enqueue_script( 'miplantilla-js-clean', get_template_directory_uri() .  "/js/clean-blog.min.js", $deps = array(), $ver = false, $in_footer = true ); 
}
add_action( 'wp_enqueue_scripts', 'miplantilla_javascripts' );











 ?>