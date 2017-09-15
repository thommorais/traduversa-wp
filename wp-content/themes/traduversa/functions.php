<?php

/*********************************************************************
*  =Assets
*********************************************************************/
function traduversa_styles() {
	// Add main stylesheet.
	$my_css_ver = date("ymd-Gis", filemtime( get_template_directory() . '/public/style.css' ));
	wp_enqueue_style( 'home-style', get_template_directory_uri() . '/public/style.css', false,  $my_css_ver, 'all');
  // Add main js.

	$my_js_ver  = date("ymd-Gis", filemtime( get_template_directory() . '/public/app.js' ));
  	wp_enqueue_script( 'home-js', get_template_directory_uri() . '/public/app.js',  array(), $my_js_ver, true );
}
add_action('wp_enqueue_scripts', 'traduversa_styles');

function wpse_173601_enqueue_scripts() {
	wp_scripts()->add_data( 'jquery', 'group', 1 );
	wp_scripts()->add_data( 'jquery-core', 'group', 1 );
	wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

/*********************************************************************
*  = Remove junk from head
*********************************************************************/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// include_once "mail/PHPMailerAutoload.php";
// /*********************************************************************
// *  = Send and Save Email
// *********************************************************************/
//
// if(!defined(ABSPATH)){
//   $pagePath = explode('/wp-content/', dirname(__FILE__));
//   include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
// }
//
// add_action( 'wp_ajax_nopriv_save_contact', 'save_contact' );
// add_action( 'wp_ajax_save_contact', 'save_contact' );
//
// function save_contact(){
//
// 	include_once "functions/contact.php";
//
// 	wp_die();
//
// }
//
// /*********************************************************************
// *  = Send and Save Orçament
// *********************************************************************/
//
// add_action( 'wp_ajax_nopriv_save_orcament', 'save_orcament' );
// add_action( 'wp_ajax_save_orcament', 'save_orcament' );
//
// function save_orcament(){
//
// 	include_once "functions/contact.php";
//
// 	wp_die();
//
// }
