<?php

require_once(get_theme_file_path('/inc/xenon-customizer.php'));

function xenon_setup() {

    load_theme_textdomain( 'xenon', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
        )
    );
}
add_action('after_setup_theme', 'xenon_setup');

function xenon_scripts() {

    wp_enqueue_style( 'xenon-font-css', get_template_directory_uri() . '//fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700', '1.0', 'all' );
    wp_enqueue_style( 'xenon-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '1.0', 'all' );
    wp_enqueue_style( 'xenon-font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', '1.0', 'all' );
    wp_enqueue_style( 'xenon-magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', '1.0', 'all' );
    wp_enqueue_style( 'xenon-owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', '1.0', 'all' );
    wp_enqueue_style( 'xenon-style-css', get_template_directory_uri() . '/assets/css/style.css', '1.0', 'all' );
    wp_enqueue_style( 'xenon-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', '1.0', 'all' );

    wp_enqueue_script( 'xenon-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-onepagenav-js', get_template_directory_uri() . '/assets/js/onepagenav.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-waypoint-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-ripples-js', get_template_directory_uri() . '/assets/js/jquery.ripples.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'xenon-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'xenon_scripts' );

