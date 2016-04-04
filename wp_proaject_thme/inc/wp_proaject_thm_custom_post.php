<?php

function custom_post_type() {
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'wppt_portfolio', 'Post Type General Name'),
		'singular_name'       => _x( 'wppt_portfolio', 'Post Type Singular Name'),
		'menu_name'           => __( 'Portfolio' ),
		'parent_item_colon'   => __( 'Portfolio'),
		'all_items'           => __( 'All Portfolio'),
		'view_item'           => __( 'View Portfolio'),
		'add_new_item'        => __( 'Add New Product' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Product'),
		'update_item'         => __( 'Update Product'),
		'search_items'        => __( 'Search Portfolio'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Portfolio'),
		'description'         => __( 'Portfolio Description' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( '' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'wppt_portfolio', $args );
}
add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'custom_texanomies', 0 );


// create two taxonomies, genres and writers for the post type "book"
function custom_texanomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'wppt_portfolio-category', 'taxonomy general name' ),
		'singular_name'     => _x( 'wppt_portfolio-category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Portfolio Category' ),
		'all_items'         => __( 'All Portfolio Category' ),
		'parent_item'       => __( 'Parent Portfolio Category' ),
		'parent_item_colon' => __( 'Parent Portfolio Category:' ),
		'edit_item'         => __( 'Edit Portfolio Category' ),
		'update_item'       => __( 'Update Portfolio Category' ),
		'add_new_item'      => __( 'Add New Portfolio Category' ),
		'new_item_name'     => __( 'New Portfolio Category Name' ),
		'menu_name'         => __( 'Portfolio Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'servies-category' ),
	);

	register_taxonomy( 'wppt_portfolio-category', array( 'wppt_portfolio' ), $args );
}
