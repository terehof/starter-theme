<?php

require_once('vendor/autoload.php');
require_once('lib/helper-functions.php');
require_once('lib/post-types.php');
require_once('lib/menus.php');
require_once('lib/sidebars.php');
require_once('lib/shortcodes.php');
require_once('lib/ajax.php');
require_once('lib/ninja-forms.php');
require_once('lib/emails/emails.php');
require_once('lib/classes/Browser.php');
require_once('lib/hide-editor.php');
require_once('lib/branding.php');

add_action('after_setup_theme', 'setup_theme');
function setup_theme() {
    \Carbon_Fields\Carbon_Fields::boot();
    
	load_theme_textdomain( 'adm', get_stylesheet_directory() . '/languages' );

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
}

add_action('carbon_fields_register_fields', 'setup_fields');
function setup_fields() {
	require_once('lib/fields/post-metas.php');
	require_once('lib/fields/global-sections.php');
	require_once('lib/fields/options.php');
	require_once('lib/fields/term-metas.php');
	require_once('lib/fields/nav-metas.php');
	require_once('lib/fields/widgets.php');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
//	wp_enqueue_script( 'jquery-ui-datepicker' );

	wp_enqueue_script( 'adm-vendor', get_bloginfo('stylesheet_directory') . '/assets/js/vendor.js', array('jquery'), false, true );
	wp_enqueue_script( 'adm-main', get_bloginfo('stylesheet_directory') . '/assets/js/main.js', array('adm-vendor'), false, true );
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_styles() {
	wp_enqueue_style( 'adm-main', get_bloginfo('stylesheet_directory') . '/assets/css/style.css' );
}