<?php

function prime_theme_styles() {

	wp_enqueue_style( 'responsiveslides_css', get_template_directory_uri() . '/css/responsiveslides.css' );
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'prime_theme_styles' );


function prime_theme_js() {
    wp_enqueue_script('j-query', 'http://code.jquery.com/jquery.js', '', '', true);
	wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', false);	
	wp_enqueue_script( 'responsiveslides_min_js', get_template_directory_uri() . '/js/responsiveslides.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap_min_js','responsiveslides_min_js'), '', true );		

}
add_action( 'wp_enqueue_scripts', 'prime_theme_js' );


?>