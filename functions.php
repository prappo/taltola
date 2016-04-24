<?php 

/* This code for theme options */

function name(){
	echo "prappo prince";
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}

function wptutsplus_register_theme_menu() {
	register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );