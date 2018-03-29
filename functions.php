<?php
/**
*
*aanaminternseo 2017 functions and defination
*
*
*Anyone can use it under GPL 2 Licence.
*
*
*/


//Including Css & Js
include_once('inc/theme-files.php');

//Including Theme Menus
include_once('inc/theme-menus.php');

//Including Custom Post
include_once('inc/aaiseo-custom-post.php');

//Including Custom Post
include_once('inc/aaiseo-theme-supports.php');



// Adding Fonts 

function aanaminternseo_theme_fonts(){


	$fonts = array();

	$fonts[] = 'Montserrat:400,700';

	$fonts[] = 'Raleway:300,400,500';

	$fonts[] = 'Halant:300,400';


	$aanaminternseo_fonts = add_query_arg(array(
		'family' => urlencode(implode('|', $fonts)),
		'subset' => 'latin'
	), 'https://fonts.googleapis.com/css');


	return $aanaminternseo_fonts;


}











//Addin Conditional Scripts


function aanaminternseo_conditional_scripts(){

	wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array(), '', false);
	wp_script_add_data('html5shim', 'conditional', 'lt IE 9');


	wp_enqueue_script('respond', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js', array(), '', false);
	wp_script_add_data('respond', 'conditional', 'lt IE 9');
}
add_action('wp_enqueue_scripts', 'aanaminternseo_conditional_scripts');


//requiring ReduxFramework
if(file_exists(dirname(__FILE__).'/opt/ReduxCore/framework.php')){
	require_once(dirname(__FILE__).'/opt/ReduxCore/framework.php');
}
if(file_exists(dirname(__FILE__).'/opt/sample/config.php')){
	require_once(dirname(__FILE__).'/opt/sample/config.php');
}



//requiring shortcodes
if(file_exists(dirname(__FILE__).'/shortcodes/shortcodes.php')){
	require_once(dirname(__FILE__).'/shortcodes/shortcodes.php');
}


//requiring metabox
if(file_exists(dirname(__FILE__).'/opt/metabox/init.php')){
	require_once(dirname(__FILE__).'/opt/metabox/init.php');
}

if(file_exists(dirname(__FILE__).'/opt/metabox/config.php')){
	require_once(dirname(__FILE__).'/opt/metabox/config.php');
}





//requiring custom widgets
if(file_exists(dirname(__FILE__).'/custom-widgets/latest-post.php')){
	require_once(dirname(__FILE__).'/custom-widgets/latest-post.php');
}



//requiring  tgm plugin activation

if(file_exists(dirname(__FILE__).'/opt/pluginactivation/require-plugins.php')){
	require_once(dirname(__FILE__).'/opt/pluginactivation/require-plugins.php');
}


//VisualComposer Code





add_action('vc_before_init','set_as_theme_vc');

function set_as_theme_vc(){
	vc_set_as_theme();
}


if(function_exists('vc_map')) :
vc_map(array(

	'name' => 'Aanaminternseo Solution Section',
	'base' => 'home-solution',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => 'Title',
			'param_name' => 'title',
			'value'  => 'Best Solutions For Your Business'
		),
		array(
			'type' => 'textarea_html',
			'heading' => 'Description',
			'param_name' => 'content',
			'value'  => 'orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim'
		)
	)
));

vc_map(array(

	'name' => 'Aanaminternseo Grow Business',
	'base' => 'home-grow-business',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => 'Title',
			'param_name' => 'title',
			'value'  => 'Grow Your Business!'
		),
		array(
			'type' => 'textarea_html',
			'heading' => 'Description',
			'param_name' => 'content',
			'value'  => 'Place Your Business At The Top Of Search Engines And Expand.'
		)
	)
));

endif;

//Sidebar Registration

function aanaminternseo_sidebar_areas(){
	
	register_sidebar(array(
		'name'               => __('Left Sidebar', 'aanaminternseo'),
		'description'        => __('You Can Add Your Left SIdebar Here', 'aanaminternseo'),
		'id'                 => 'left-sidebar',
		'before_widget'      => '<div class="widget sidebar_one">',
		'after_widget'       => '</div>',
		'before_title'       => '<h3>',
		'after_title'        => '</h3>',

		));
		
	register_sidebar(array(
		'name' 			=> __('Footer Left Widget', 'aanaminternseo'),
		'description' 	=> __('You can add your Footer Left Widgets Here', 'aanaminternseo'),
		'id' 			=> 'footer-left-widget',
		'before_widget' => '<div class="col-md-4 col-sm-6 col-xs-12"><div class="widget widget_text">',
		'after_widget' 	=> '</div></div>',
	));
	register_sidebar(array(
		'name' 			=> __('Footer Center Widget', 'aanaminternseo'),
		'description' 	=> __('You can add your Footer Center Widget Here', 'aanaminternseo'),
		'id' 			=> 'footer-center-widget',
		'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-6"><div class="widget footer_top_menu">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
	));
	register_sidebar(array(
		'name' 			=> __('Footer Right Widget', 'Aanaminternseo'),
		'description' 	=> __('You can add your Footer Right Widget Here', 'aanaminternseo'),
		'id' 			=> 'footer-right-widget',
		'before_widget' => '<div class="col-md-2 col-sm-6 col-xs-6"><div class="widget footer_top_menu">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
	));
	
}
add_action('widgets_init','aanaminternseo_sidebar_areas');







function aanaminternseo_textdomain_function () {
	load_theme_textdomain('aanaminternseo',get_template_directory().'/language');
}
add_action('after_setup_theme', 'aanaminternseo_textdomain_function');
