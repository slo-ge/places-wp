<?php
/**
 * Created by PhpStorm.
 * User: Philipp
 * Date: 10.10.2019
 * Time: 17:31
 */
function add_location_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Location',
        'singular_name'       => 'Location',
        'menu_name'           => 'Locations',
        'parent_item_colon'   => 'Parent Location',
        'all_items'           => 'All Location',
        'view_item'           => 'View Location',
        'add_new_item'        => 'Add New Location',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Location',
        'update_item'         => 'Update Location',
        'search_items'        => 'Search Location',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash'
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => 'locations',
        'description'         => 'Location news and reviews',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
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
        'menu_position'       => 000,
        'menu_icon'           => 'dashicons-heart',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest'		  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'locations', $args );

}