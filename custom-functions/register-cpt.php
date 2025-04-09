<?php
/*********************************
		    Teams CPT
**********************************/
function TEAMMEMBERS() {
  register_post_type( 'team-members',
    array(
        'labels' => array(
            'name' => __( 'Team Members'),
            'singular_name' => __( 'Team Members')
        ),
        'public' => true,
            'menu_icon' => 'dashicons-admin-users',
            //'has_archive' => ture,
            'rewrite' => array('slug' => 'team-members'),
        )
    );
}
add_action( 'init', 'TEAMMEMBERS' );
function TEAMMEMBERS_a() {
  $labels = array(
    'name'                => _x( 'Team Members', 'Post Type General Name', 'VI' ),
    'singular_name'       => _x( 'Team Members', 'Post Type Singular Name', 'VI' ),
    'menu_name'           => __( 'Team Members', 'VI' ),
    'parent_item_colon'   => __( 'Team Members', 'VI' ),
    'all_items'           => __( 'All Team Members', 'VI' ),
    'view_item'           => __( 'View Team Members', 'VI' ),
    'add_new_item'        => __( 'Add New Team Members', 'VI' ),
    'add_new'             => __( 'Add New', 'VI' ),
    'edit_item'           => __( 'Edit Team Members', 'VI' ),
    'update_item'         => __( 'Update Team Members', 'VI' ),
    'search_items'        => __( 'Search Team Members', 'VI' ),
    'not_found'           => __( 'Not Found', 'VI' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'VI' ),
  );
  $args = array(
    'label'               => __( 'Team Members', 'VI' ),
    'description'         => __( 'Team Members', 'VI' ),
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
  register_post_type( 'TEAMMEMBERS', $args );
}
add_action( 'init', 'TEAMMEMBERS_a', 0 );

?>