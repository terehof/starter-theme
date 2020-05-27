<?php

add_filter('ninja_forms_action_email_message', 'alter_email_template', 10, 3);
function alter_email_template($message, $data, $action_settings) {
	ob_start();
	
	include( locate_template( 'lib/emails/templates/form-submission.php' ) );
	
	$message = str_replace( '{{TEMPLATE_PATH}}', get_bloginfo('stylesheet_directory') . '/lib/emails/templates', ob_get_clean() );
	
	return $message;
}