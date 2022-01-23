<?php
function event_taxonomy(){
	$labels =array(
		'name' => _x('Event Type','taxonomy general name'),
		'singular_name' => _x('Event Type','taxonomy singular name'),
		'search_items' => __('Search  Event Type'),
		'all_items' => __('All  Event Type'),
		'parent_item' => __('Parent Items'),
		'parent_item_coln' => __('Parent Items'), 
		'edit_item' => __( 'Edit  Event Type' ), 
		'update_item' => __( 'Update  Event Type' ),
		'add_new_item' => __( 'Add New  Event Type' ),
		'new_item_name' => __( 'New  Event Type Name' ),
		'menu_name' => __( ' Event  Type' ),
	);

	
	register_taxonomy('event_type', array('event'),array(
		'hierarchical' => true,
		'labels' => $labels ,
		'show_ui' => true ,
		'show_in_rest' =>true ,
		'show_admin_column' => true,
		'query_var' => true ,
		'rewrite' => array('slug' => 'event'), 	
	));
}
add_action('init','event_taxonomy',0);