<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'my_custom_init' );
function my_custom_init() {

	$label = 'Case Studies';

	register_post_type( 'case-studies', array(
		'labels'             => array(
			'name'              => $label, // Основное название типа записи
			'singular_name'     => $label, // отдельное название записи типа Book
			'add_new'           => __( 'Add New' ),
			'add_new_item'      => __( 'Add New' ),
			'edit_item'         => __( 'Edit' ),
			'new_item'          => __( 'New' ),
			'view_item'         => __( 'View' ),
			'search_items'      => __( 'Search' ),
			'parent_item_colon' => '',
			'menu_name'         => $label
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-admin-home',
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	) );
	
	$label = 'Our Team';

	register_post_type( 'our-team', array(
		'labels'             => array(
			'name'              => $label, // Основное название типа записи
			'singular_name'     => $label, // отдельное название записи типа Book
			'add_new'           => __( 'Add New' ),
			'add_new_item'      => __( 'Add New' ),
			'edit_item'         => __( 'Edit' ),
			'new_item'          => __( 'New' ),
			'view_item'         => __( 'View' ),
			'search_items'      => __( 'Search' ),
			'parent_item_colon' => '',
			'menu_name'         => $label
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => get_template_directory_uri(). '/assets/i/static/team.png',
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	) );

	$label = 'Services';

	register_post_type( 'services', array(
		'labels'             => array(
			'name'              => $label, // Основное название типа записи
			'singular_name'     => $label, // отдельное название записи типа Book
			'add_new'           => __( 'Add New' ),
			'add_new_item'      => __( 'Add New' ),
			'edit_item'         => __( 'Edit' ),
			'new_item'          => __( 'New' ),
			'view_item'         => __( 'View' ),
			'search_items'      => __( 'Search' ),
			'parent_item_colon' => '',
			'menu_name'         => $label
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-admin-home',
		'supports'           => array( 'title', 'icon', 'excerpt', 'editor' )
	) );
}
