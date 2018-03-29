<?php
//Including aanaminternseo theme css & json_decode

function aanaminternseo_theme_files() {
	
	//Including css files
	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.5', 'all' );
	wp_register_style( 'webfonts', get_template_directory_uri().'/fonts/webfonts/fonts.css', array(), '1.0', 'all' );
	wp_register_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.4.0', 'all' );
	wp_register_style( 'iconfont', get_template_directory_uri().'/css/icofont.css', array(), '1.0.0', 'all' );
	wp_register_style( 'owlcarousel', get_template_directory_uri().'/css/owl.carousel.css', array(), '2.0', 'all' );
	wp_register_style( 'animatecss', get_template_directory_uri().'/css/animate.min.css', array(), '3.4.0', 'all' );
	wp_register_style( 'meanmenu', get_template_directory_uri().'/css/meanmenu.css', array(), '2.0.7', 'all' );
	wp_register_style( 'venobox', get_template_directory_uri().'/css/venobox.css', array(), '1.0', 'all' );
	wp_register_style( 'stylecss', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all' );
	wp_register_style( 'responsivecss', get_template_directory_uri().'/css/responsive.css', array(), '1.0', 'all' );
	
	
	
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('webfonts');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('iconfont');
	wp_enqueue_style('owlcarousel');
	wp_enqueue_style('animatecss');
	wp_enqueue_style('meanmenu');
	wp_enqueue_style('venobox');
	wp_enqueue_style('stylecss');
	wp_enqueue_style('responsivecss');
	wp_enqueue_style('comment-reply');
	
	
	
	//Including Js files
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.3.5', true);
	wp_enqueue_script('owlcarousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '2.0', true);
	wp_enqueue_script('meanmenu-js', get_template_directory_uri().'/js/jquery.meanmenu.js', array('jquery'), '2.0.7', true);
	wp_enqueue_script('active-js', get_template_directory_uri().'/js/active.js', array('jquery'), '0.1', true);
	wp_enqueue_script('comment-reply');
	
}
add_action('wp_enqueue_scripts','aanaminternseo_theme_files');