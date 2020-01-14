 <?php
function miplantilla_estilos() {
    wp_enqueue_style( 'miplantilla-estilos', get_stylesheet_uri() ); 

    wp_enqueue_style( 'miplantilla-estilos-boostrap', get_template_directory_uri() ."/css/open-iconic-bootstrap.min.css"  );
    wp_enqueue_style( 'miplantilla-estilos-animate', get_template_directory_uri() . "/css/animate.css" );


    wp_enqueue_style( 'miplantilla-estilos-carousel', get_template_directory_uri() . "/css/owl.carousel.min.css"  );
    wp_enqueue_style( 'miplantilla-estilos-theme', get_template_directory_uri() . "/css/owl.theme.default.min.css");
    wp_enqueue_style( 'miplantilla-estilos-magnific', get_template_directory_uri() ."/css/magnific-popup.css" );
    wp_enqueue_style( 'miplantilla-estilos-aos', get_template_directory_uri() . "/css/aos.css");
    wp_enqueue_style( 'miplantilla-estilos-ionicons', get_template_directory_uri() . "/css/ionicons.min.css");
    wp_enqueue_style( 'miplantilla-estilos-bootstrap-datepicker', get_template_directory_uri() .  "/css/bootstrap-datepicker.css");
    wp_enqueue_style( 'miplantilla-estilos-timepicker', get_template_directory_uri() . "/css/jquery.timepicker.css" );
    wp_enqueue_style( 'miplantilla-estilos-flaticon', get_template_directory_uri() . "/css/flaticon.css" );
    wp_enqueue_style( 'miplantilla-estilos-icomoon', get_template_directory_uri() . "/css/icomoon.css");
    wp_enqueue_style( 'miplantilla-estilos-style', get_template_directory_uri() . "/css/style.css");
    
   }

add_action( 'wp_enqueue_scripts', 'miplantilla_estilos' );



function miplantilla_javascripts() {
    wp_enqueue_script( 'miplantilla_javascripts-jquery.min', get_template_directory_uri() . "/js/jquery.min.js", $deps = array(), $ver = false, $in_footer = true ); 

    wp_enqueue_script( 'miplantilla_javascripts-jquery-migrate', get_template_directory_uri() . "/js/jquery-migrate-3.0.1.min.js" , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-popper', get_template_directory_uri() . "/js/popper.min.js"  , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-bootstrap.min', get_template_directory_uri() . "/js/bootstrap.min.js"  , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-jquery.easing', get_template_directory_uri() . "/js/jquery.easing.1.3.js"  , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-waypoints', get_template_directory_uri() .  "/js/jquery.waypoints.min.js" , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-stellar', get_template_directory_uri() .  "/js/jquery.stellar.min.js" , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-owl.carousel', get_template_directory_uri() . "/js/owl.carousel.min.js"  , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-jquery.magnific', get_template_directory_uri() . "/js/jquery.magnific-popup.min.js" , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-aos', get_template_directory_uri() . "/js/aos.js" , $deps = array(), $ver = false, $in_footer = true );

    wp_enqueue_script( 'miplantilla_javascripts-jquery', get_template_directory_uri() . "/js/jquery.animateNumber.min.js"  , $deps = array(), $ver = false, $in_footer = true );

	wp_enqueue_script( 'miplantilla_javascripts-bootstrap-datepicker', get_template_directory_uri() . "/js/bootstrap-datepicker.js" , $deps = array(), $ver = false, $in_footer = true );

	wp_enqueue_script( 'miplantilla_javascripts-jquery.timepicker', get_template_directory_uri() . "/js/jquery.timepicker.min.js"  , $deps = array(), $ver = false, $in_footer = true );

	wp_enqueue_script( 'miplantilla_javascripts-scrollax', get_template_directory_uri() . "/js/scrollax.min.js"  , $deps = array(), $ver = false, $in_footer = true );

	//wp_enqueue_script( 'miplantilla_javascripts-maps', get_template_directory_uri() . "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"  , $deps = array(), $ver = false, $in_footer = true );

	wp_enqueue_script( 'miplantilla_javascripts-google-maps', get_template_directory_uri() . "/js/google-map.js"  , $deps = array(), $ver = false, $in_footer = true );

	  wp_enqueue_script( 'miplantilla_javascripts-main', get_template_directory_uri() . "/js/main.js"  , $deps = array(), $ver = false, $in_footer = true );



}
add_action( 'wp_enqueue_scripts', 'miplantilla_javascripts' );










?>