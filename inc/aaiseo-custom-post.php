<?php


function aanaminternseo_theme_custompost() {
	register_post_type('slide',array(
		'label'=> 'Slides',
		'labels' => array (
			'name'=> 'Slides',
			'singular_name' => 'Slide',
			'add_new' => 'Add New Slider',
			'add_new_item' => 'Add New Slider'
		),
		'public' => true,
		'menu_icon' =>'dashicons-welcome-view-site',
		'supports'=> array('title','editor','thumbnail','custom-fields','excerpt'),
	));
	
	register_post_type('Services',array(
		'label'=> 'Services',
		'labels' => array (
			'name'=> 'Services',
			'singular_name' => 'Service',
		),
		'public' => true,
		'menu_icon' =>'dashicons-admin-tools',
		'supports'=> array('title','thumbnail','custom-fields','excerpt'),
	));
	
}
add_action('init','aanaminternseo_theme_custompost');