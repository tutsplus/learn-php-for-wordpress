<?php
/*****************************************************************************
Register an extra post type for content with taxonomy
*****************************************************************************/
function tutsplus_register_post_type() {
	
	// book blurbs
	$labels = array( 
		'name' => __( 'Books' ),
		'singular_name' => __( 'Book' ),
		'add_new' => __( 'New Book' ),
		'add_new_item' => __( 'Add New Book' ),
		'edit_item' => __( 'Edit Book' ),
		'new_item' => __( 'New Book' ),
		'view_item' => __( 'View Book' ),
		'search_items' => __( 'Search Books' ),
		'not_found' =>  __( 'No Book Found' ),
		'not_found_in_trash' => __( 'No Book found in Trash' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array(
			'title', 
			'editor', 
			'excerpt', 
			'custom-fields', 
			'thumbnail',
			'page-attributes'
		),
		'taxonomies' => array( 'rmcc_book', 'category'), 
		'rewrite'   => array( 'slug' => 'books' ),

	);
	register_post_type( 'tutsplus_book', $args );

		
}
add_action( 'init', 'tutsplus_register_post_type' );


/**********************************************************************************
	 register taxonomy - series
**********************************************************************************/
function tutsplus_register_taxonomy() {	
	
	
	// series
	$labels = array(
		'name'              => __( 'Series' ),
		'singular_name'     => __( 'Series' ),
		'search_items'      => __( 'Search Seriess' ),
		'all_items'         => __( 'All Series' ),
		'edit_item'         => __( 'Edit Series' ),
		'update_item'       => __( 'Update Series' ),
		'add_new_item'      => __( 'Add New Series' ),
		'new_item_name'     => __( 'New Series Name' ),
		'menu_name'         => __( 'Series' ),
	);
	
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'rewrite' => array( 'slug' => 'series' ),
		'show_admin_column' => true,
		'show_in_rest' => true
	);
	
	register_taxonomy( 'tutsplus_series', array( 'tutsplus_book' ), $args);
	
}
add_action( 'init', 'tutsplus_register_taxonomy' );