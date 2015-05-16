<?php

// ------------------------------
// Portfolio                    -
// ------------------------------

add_action('init', 'portfolio_custom_init');

function portfolio_custom_init()
	{
	  $labels = array(
		'name' => _x('Portfolio Item', 'post type general name', 'applause'),
		'singular_name' => _x('Portfolio Item', 'post type singular name', 'applause'),
		'add_new' => _x('Add New', 'portfolio', 'applause'),
		'add_new_item' => __('Add New Portfolio Item', 'applause'),
		'edit_item' => __('Edit Portfolio Item', 'applause'),
		'new_item' => __('New Portfolio Item', 'applause'),
		'view_item' => __('View Portfolio Item', 'applause'),
		'search_items' => __('Search Portfolio Items', 'applause'),
		'not_found' =>  __('No Portfolio Items found', 'applause'),
		'not_found_in_trash' => __('No Portfolio Items found in Trash', 'applause'),
		'parent_item_colon' => '',
		'menu_name' => 'Portfolio Item'

	  );
	  	  
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail'),
		'menu_icon' => 'dashicons-portfolio',
	  );
	  // The following is the main step where we register the post.
	  register_post_type('portfolio',$args);
	  
	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Tags', 'taxonomy general name', 'applause' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name', 'applause' ),
		'search_items' =>  __( 'Search Types', 'applause' ),
		'all_items' => __( 'All Tags', 'applause' ),
		'parent_item' => __( 'Parent Tag', 'applause' ),
		'parent_item_colon' => __( 'Parent Tag:', 'applause' ),
		'edit_item' => __( 'Edit Tags', 'applause' ),
		'update_item' => __( 'Update Tag', 'applause' ),
		'add_new_item' => __( 'Add New Tag', 'applause' ),
		'new_item_name' => __( 'New Tag Name', 'applause' ),
	  );
		// Custom taxonomy for portfolio Tags
		register_taxonomy('tagportifolio',array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tag-portifolio' ),
	  ));
	  
	}

// ------------------------------
// Team                         -
// ------------------------------

add_action( 'init', 'teams_mt' );
function teams_mt() {
register_post_type( 'teams',
    array(
      'labels' => array(
		'name' => __( 'Teams', 'post type general name', 'applause' ),
		'singular_name' => __( 'Member Item', 'post type singular name', 'applause' ),
		'add_new' => __( 'Add New Member','applause' ),
		'add_new_item' => __( 'Add New Member', 'applause' ),
		'edit_item' => __( 'Edit Member', 'applause' ),
		'new_item' => __( 'New Member', 'applause' ),
		'view_item' => __( 'View Member', 'applause' ),
		'search_items' => __( 'Search Member', 'applause' ),
		'not_found' =>  __( 'No Members found', 'applause' ),
		'not_found_in_trash' => __( 'No Members found in Trash', 'applause' ),
		'parent_item_colon' => ''
      ),
      'public' => true,
	  'exclude_from_search' => true,
	  'supports' => array('title'),
	  'menu_icon' => 'dashicons-groups'
	  //'menu_icon' => get_bloginfo('template_directory') . '/img/icon-events.png'
    )
  );
}


// ------------------------------
// Price Table                  -
// ------------------------------

add_action( 'init', 'pricetable_mt' );

function pricetable_mt() {
register_post_type( 'pricetable',
    array(
      'labels' => array(
		'name' => __( 'PriceTables', 'post type general name', 'applause' ),
		'singular_name' => __( 'PriceTable', 'post type singular name', 'applause' ),
		'add_new' => __( 'Add New PriceTable','applause' ),
		'add_new_item' => __( 'Add New PriceTable', 'applause' ),
		'edit_item' => __( 'Edit PriceTable', 'applause' ),
		'new_item' => __( 'New PriceTable', 'applause' ),
		'view_item' => __( 'View PriceTable', 'applause' ),
		'search_items' => __( 'Search PriceTables', 'applause' ),
		'not_found' =>  __( 'No PriceTables found', 'applause' ),
		'not_found_in_trash' => __( 'No PriceTables found in Trash', 'applause' ),
		'parent_item_colon' => ''
      ),
      'public' => true,
	  'exclude_from_search' => true,
	  'supports' => array('title'),
	  'menu_icon' => 'dashicons-tag',
    )
  );
}





?>