<?php
add_filter( 'ninja_forms_field_template_file_paths', 'custom_field_file_path' );
function custom_field_file_path( $paths ){

	$paths[] =  get_stylesheet_directory() . '/ninja-forms/templates/';

	return $paths;
}