<?php

// add_action('init', 'register_post_types');
// function register_post_types() {
// 	register_post_type(
// 		'_order',
// 		array(
// 			'labels'             => array(
// 				'name'               => _x( 'Orders', 'post type general name', 'adm' ),
// 				'singular_name'      => _x( 'Order', 'post type singular name', 'adm' ),
// 				'menu_name'          => _x( 'Orders', 'admin menu', 'adm' ),
// 				'name_admin_bar'     => _x( 'Order', 'add new on admin bar', 'adm' ),
// 				'add_new'            => _x( 'Add New', 'order', 'adm' ),
// 				'add_new_item'       => __( 'Add New Order', 'adm' ),
// 				'new_item'           => __( 'New Order', 'adm' ),
// 				'edit_item'          => __( 'Edit Order', 'adm' ),
// 				'view_item'          => __( 'View Order', 'adm' ),
// 				'all_items'          => __( 'All Orders', 'adm' ),
// 				'search_items'       => __( 'Search Orders', 'adm' ),
// 				'parent_item_colon'  => __( 'Parent Orders:', 'adm' ),
// 				'not_found'          => __( 'No orders found.', 'adm' ),
// 				'not_found_in_trash' => __( 'No orders found in Trash.', 'adm' )
// 			),
// 			'description'        => __( 'Description.', 'adm' ),
// 			'public'             => false,
// 			'publicly_queryable' => true,
// 			'show_ui'            => true,
// 			'show_in_menu'       => true,
// 			'show_in_rest'		 => true,	
// 			'query_var'          => true,
// 			'rewrite'            => array( 'slug' => 'orders' ),
// 			'capability_type'    => 'post',
// 			'has_archive'        => false,
// 			'hierarchical'       => true,
// 			'menu_position'      => null,
// 			'supports'           => array( 'title', 'editor', 'page-attributes' )
// 		)
// 	);

// 	register_taxonomy(
// 		'service-category',
// 		'service',
// 		array(
// 			'hierarchical'      => true,
// 			'labels'            => array(
// 				'name'              => _x( 'Categories', 'taxonomy general name', 'adm' ),
// 				'singular_name'     => _x( 'Category', 'taxonomy singular name', 'adm' ),
// 				'search_items'      => __( 'Search Categories', 'adm' ),
// 				'all_items'         => __( 'All Categories', 'adm' ),
// 				'parent_item'       => __( 'Parent Category', 'adm' ),
// 				'parent_item_colon' => __( 'Parent Category:', 'adm' ),
// 				'edit_item'         => __( 'Edit Category', 'adm' ),
// 				'update_item'       => __( 'Update Category', 'adm' ),
// 				'add_new_item'      => __( 'Add New Category', 'adm' ),
// 				'new_item_name'     => __( 'New Category', 'adm' ),
// 				'menu_name'         => __( 'Categories', 'adm' )
// 			),
// 			'public'            => false,
// 			'publicly_queryable' => true,
// 			'show_in_nav_menus' => true,
// 			'show_ui'           => true,
// 			'show_admin_column' => true,
// 			'query_var'         => true,
// 			'rewrite'           => array(
// 				'slug' => 'service-categories'
// 			)
// 		)
// 	);
// }