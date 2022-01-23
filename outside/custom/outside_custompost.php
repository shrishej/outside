<?php 
//To Register the custom post type for Crystalo 
//Custom Post Type for newsblog
function event_blog_post_type(){
	$labels = array(
		'name' => _x(' Event ',' event ','outside'),
		'singular-name' => _x('event','about_singular','outside'),
		'menu-name' => _x('Event ','event', 'outside'),
		'add_new' => _x('Add New Event','outside'),
		'add_new_item'          => __( 'Add Event ', 'outside' ),
		'new_item'              => __( 'New Event', 'outside' ),
		'edit_item'             => __( 'Edit Event', 'outside' ),
		'view_item'             => __( 'View Event', 'outside' ),
		'all_items'             => __( 'All Event', 'outside' ),
		'search_items'          => __( 'Search Event', 'outside' ),
		'parent_item_colon'     => __( 'Parent Event:', 'outside' ),
		'not_found'             => __( 'No Event found.', 'outside' ),
		'not_found_in_trash'    => __( 'No Event found in Trash.', 'outside' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'taxonomies'         => array('event_type'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type('event',$args);
}

add_action( 'init', 'event_blog_post_type' );
