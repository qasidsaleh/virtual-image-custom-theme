<?php
/*********************************
		    Services CPT
**********************************/
function SERVICES() {
  register_post_type( 'services',
    array(
        'labels' => array(
            'name' => __( 'Services'),
            'singular_name' => __( 'Services')
        ),
        'public' => true,
            'menu_icon' => 'dashicons-products',
            //'has_archive' => ture,
            'rewrite' => array('slug' => 'services'),
        )
    );
}
add_action( 'init', 'SERVICES' );
function SERVICES_a() {
  $labels = array(
    'name'                => _x( 'Services', 'Post Type General Name', 'VI' ),
    'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'VI' ),
    'menu_name'           => __( 'Services', 'VI' ),
    'parent_item_colon'   => __( 'Services', 'VI' ),
    'all_items'           => __( 'All Services', 'VI' ),
    'view_item'           => __( 'View Services', 'VI' ),
    'add_new_item'        => __( 'Add New Services', 'VI' ),
    'add_new'             => __( 'Add New', 'VI' ),
    'edit_item'           => __( 'Edit Services', 'VI' ),
    'update_item'         => __( 'Update Services', 'VI' ),
    'search_items'        => __( 'Search Services', 'VI' ),
    'not_found'           => __( 'Not Found', 'VI' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'VI' ),
  );
  $args = array(
    'label'               => __( 'Services', 'VI' ),
    'description'         => __( 'Services', 'VI' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail'),
    'taxonomies'          => array( 'genres' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => false,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => false,
    'menu_position'       => 1,
    'can_export'          => false,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'capability_type'     => 'page',
  );
  register_post_type( 'SERVICES', $args );
}
add_action( 'init', 'SERVICES_a', 0 );


/*********************************
		    Conditions CPT
**********************************/
function CONDITIONS() {
  register_post_type( 'conditions',
    array(
        'labels' => array(
            'name' => __( 'Conditions'),
            'singular_name' => __( 'Conditions')
        ),
        'public' => true,
            'menu_icon' => 'dashicons-universal-access',
            //'has_archive' => ture,
            'rewrite' => array('slug' => 'conditions'),
        )
    );
}
add_action( 'init', 'CONDITIONS' );
function CONDITIONS_a() {
  $labels = array(
    'name'                => _x( 'Conditions', 'Post Type General Name', 'VI' ),
    'singular_name'       => _x( 'Conditions', 'Post Type Singular Name', 'VI' ),
    'menu_name'           => __( 'Conditions', 'VI' ),
    'parent_item_colon'   => __( 'Conditions', 'VI' ),
    'all_items'           => __( 'All Conditions', 'VI' ),
    'view_item'           => __( 'View Conditions', 'VI' ),
    'add_new_item'        => __( 'Add New Conditions', 'VI' ),
    'add_new'             => __( 'Add New', 'VI' ),
    'edit_item'           => __( 'Edit Conditions', 'VI' ),
    'update_item'         => __( 'Update Conditions', 'VI' ),
    'search_items'        => __( 'Search Conditions', 'VI' ),
    'not_found'           => __( 'Not Found', 'VI' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'VI' ),
  );
  $args = array(
    'label'               => __( 'Conditions', 'VI' ),
    'description'         => __( 'Conditions', 'VI' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail'),
    'taxonomies'          => array( 'genres' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => false,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => false,
    'menu_position'       => 1,
    'can_export'          => false,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'capability_type'     => 'page',
  );
  register_post_type( 'CONDITIONS', $args );
}
add_action( 'init', 'CONDITIONS_a', 0 );

add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails' );

?>