<?php
/* Theme Name: Jonathan Paddock Summer 2017 WordPress Theme
Author: JM Paddock
Auhtor URI: http://www.ultan.photography/
Description: This is a Demo WordPress Theme that I created so that I may complete my training under Yoda, unlike Luke, and become a Jedi Master... just like Mike. 
Version 1.0
*/

// Register My Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

//Register Menus

register_nav_menus(array(
    'main-menu' =>__( 'Main Menu' ),

));

// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );

//
?>