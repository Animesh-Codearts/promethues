<?php



/**

 * Enqueue scripts and styles.

 */



function promethues_scripts() {


	wp_enqueue_style( 'promethues-style', get_stylesheet_uri() );

	wp_enqueue_style( 'promethues-bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '1.0' );

	wp_enqueue_style( 'promethues-carousel-css', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );

	wp_enqueue_style( 'promethues-custom-css', get_theme_file_uri('/assets/css/custom.css'), array(), '1.0' );

	wp_enqueue_style( 'promethues-responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );

	wp_enqueue_style( 'promethues-all-css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '1.0' );







	wp_enqueue_script( 'jquery-js', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '1.0', true );

	wp_enqueue_script( 'carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

	wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );


}

add_action( 'wp_enqueue_scripts', 'promethues_scripts' );

