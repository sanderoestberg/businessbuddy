<?php
add_action( 'wp_enqueue_scripts', 'bbh_enqueue_scripts_styles' );


function bbh_enqueue_scripts_styles() {
    /*----------  Scripts  ----------*/
    //Lazy sizes
    wp_enqueue_script( 'picturefill', get_stylesheet_directory_uri() . '/assets/js/lazysizes/picturefill.min.js' );
    wp_enqueue_script( 'lazysizes', get_stylesheet_directory_uri() . '/assets/js/lazysizes/lazysizes.min.js' );
    wp_enqueue_script( 'lazysizesbackground', get_stylesheet_directory_uri() . '/assets/js/lazysizes/ls.bgset.min.js' );
    //slick.js
    // wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', array( 'jquery' )); // slickjs
    //slick.js
    wp_register_script( 'slickjs', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', array( 'jquery' )); // slickjs

	// enter-view.js
	wp_enqueue_script( 'bbh_enter_view', get_stylesheet_directory_uri() . '/assets/js/enter-view/enter-view.min.js', array(), '1.0.0', false);

	//bbh js
    wp_enqueue_script( 'brandbyhandscripts', get_stylesheet_directory_uri() . '/assets/js/bbh_scripts.js', array( 'jquery', 'bbh_enter_view' ), filemtime(STYLESHEETPATH . '/assets/js/bbh_scripts.js'), true );
    //wp_enqueue_script( 'brandbyhandstandardscript', get_stylesheet_directory_uri() . '/assets/js/bbh_standards.js', array(), '1.0.0', false);



    /*----------  Styles  ----------*/
    //remove block css
    wp_dequeue_style( 'wp-block-library' );
    //bootstrap
    wp_enqueue_style( 'bootstrapcss', get_stylesheet_directory_uri() . '/assets/bootstrap/bootstrap.css', '1.0', 'all');

    //slick
    // wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', '1.0', 'all');
    // wp_enqueue_style( 'slicktheme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css', '1.0', 'all');
    // Slick
    wp_register_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', '1.0', 'all');
    wp_register_style( 'slick_theme', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', '1.0', 'all');

	// dequeue som gutenberg garbage
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );

	// remove some gutenberg stuff
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wc-block-vendors-style');
	wp_dequeue_style('wc-block-style');
}
