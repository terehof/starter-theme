<?php 

// add_action( 'wp_ajax_get_area_polygon', 'ajax_get_area_polygon' );
// add_action( 'wp_ajax_nopriv_get_area_polygon', 'ajax_get_area_polygon' );
// function ajax_get_area_polygon() {
// 	if ( !$_POST['zip_code'] ) {
// 		exit;
// 	}

// 	$zip_code = (int) $_POST['zip_code'];

// 	$polygons = get_area_polygons( $zip_code );

// 	if ( $polygons ) {
// 		echo json_encode( $polygons );
// 	}

// 	exit;
// }

// add_action( 'wp_ajax_calculate_order_amount', 'ajax_calculate_order_amount' );
// add_action( 'wp_ajax_nopriv_calculate_order_amount', 'ajax_calculate_order_amount' );
// function ajax_calculate_order_amount() {
// 	if ( empty( $_POST['fields'] ) ) {
// 		exit;
// 	}

// 	parse_str( $_POST['fields'], $fields );

// 	$amount = calculate_order_amount( $fields['zip_code'], $fields['dumpster_size'], $fields['drop_off_date'], $fields['pick_up_date'] );

// 	if ( !is_wp_error( $amount ) ) {
// 		echo __('Total:', 'adm') . ' ' . '<span class="order-total">$' . $amount . '</span>';
// 	}

// 	exit;
// }