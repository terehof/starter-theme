<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Changing logo in admin (top left corner)
 **/
add_action('add_admin_bar_menus', 'reset_admin_wplogo');
function reset_admin_wplogo(  ){
	remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // remove default panel (logo)
	add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // add custom
}
function my_admin_bar_wp_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'wp-logo',
		'title' => '<img style="width: 20px; height: 20px; margin-top: 7px;" src="'. get_bloginfo('template_directory') .'/assets/img/logo-icon-white.svg" alt="" >',
		'href'  => home_url('/'),
		'meta'  => array(
			'title' => 'Mention',
		),
	) );
}

/**
 * Changing logo on admin login page
 **/
add_action('login_head', 'artisans_custom_login_logo');
function artisans_custom_login_logo() {
	?>

	<style type="text/css">
		h1 a {
			height: 70px !important;
			background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/logo.svg) !important;
			width: 100% !important;
			background-size: contain !important;
			background-position: center !important;
		}
	</style>

	<?php
}
