<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// echo '<prep>';
	// var_dump($classes);
	// echo '</prep>';
	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// if (is_singular ( 'page')){
// 	global $post;
// 	inhabetent_debug($post);
// 	$classes[] = 'page-'. $post->post_name;
// }


// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


// // custom login for theme
// function childtheme_custom_login() {
// 	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/customlogin.css" />';
// }
 
// add_action('login_head', 'childtheme_custom_login');

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
		height: 53px !important; width: 300px !important; background-size: cover; }                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function the_url( ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );


// function Inhabitent_debug ( $var ){
// 	echo '<prep>';
// 	var_dump($var);
// 	echo '</prep>';
// 	return $classes;

// }

