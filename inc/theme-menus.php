<?php 

function aanaminternseo_theme_menu () {
	register_nav_menus(array(
	       'main_menu' => __( 'Main Menu', 'aanaminternseo' ),
		   'footer_menu' => __( 'Footer Menu', 'aanaminternseo' ),
		   ));
}
add_action('init','aanaminternseo_theme_menu');



function aanaminternseo_theme_default_menu(){
	echo '<ul id="nav">';
	if('page'!=get_option('show_on_front')){
		echo '<li><a href=" ' .home_url(). ' ">home</a></li>';
	}
	wp_list_pages('title_li=');
	echo '</ul>';
}