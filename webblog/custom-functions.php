<?php

//echo "test";//

// if(! function_exists('ihs_enqueue_scripts')){
// 	function ihs_enqueue_scripts(){
// 		if(is_product()){
// 			wp_enqueue_style( 'is_boot_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' );
// 			wp_enqueue_script( 'is_boot_script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), '', true );
// 		}
// 	}
// }

// add_action( 'wp_enqueue_scripts', 'ihs_enqueue_scripts' );



if ( ! function_exists( 'ihs_enqueue_scripts' ) ) {
	function ihs_enqueue_scripts() {
		// if ( is_product() ) {
			wp_enqueue_style( 'bootstrap_style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css',array(), 201419999  );
			wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() .'/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );
		// }
	}
	add_action( 'wp_enqueue_scripts', 'ihs_enqueue_scripts' );
}

