<?php



function aismetabox_for_posts (){
	
	
	$sliders = new_cmb2_box(array(
		'title'   => 'Additional Fields',
		'id' => 'additiona;-for-slider',
		'object_types' => array('seoslide')
	));
	
	
	$sliders->add_field(array(
		'name' => 'Subtitle',
		'id' => 'slider-subtitle',
		'type' => 'text'
	
	));
	
}

add_action('cmb2_admin_init','aismetabox_for_posts');