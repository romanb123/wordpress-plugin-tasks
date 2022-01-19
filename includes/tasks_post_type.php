<?php

/**
 * Register a custom post type called "Task".
 *
 * @see get_post_type_labels() for label keys.
 */
function Task_init()
{
    $labels = array(
        'name'                  => _x('Tasks', 'Post type general name', 'rb-plugin'),
        'singular_name'         => _x('Task', 'Post type singular name', 'rb-plugin'),
        'menu_name'             => _x('Tasks', 'Admin Menu text', 'rb-plugin'),
        'name_admin_bar'        => _x('Task', 'Add New on Toolbar', 'rb-plugin'),
        'add_new'               => __('Add New', 'rb-plugin'),
        'add_new_item'          => __('Add New Task', 'rb-plugin'),
        'new_item'              => __('New Task', 'rb-plugin'),
        'edit_item'             => __('Edit Task', 'rb-plugin'),
        'view_item'             => __('View Task', 'rb-plugin'),
        'all_items'             => __('All Tasks', 'rb-plugin'),
        'search_items'          => __('Search Tasks', 'rb-plugin'),
        'parent_item_colon'     => __('Parent Tasks:', 'rb-plugin'),
        'not_found'             => __('No Tasks found.', 'rb-plugin'),
        'not_found_in_trash'    => __('No Tasks found in Trash.', 'rb-plugin'),
        'featured_image'        => _x('Task Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rb-plugin'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rb-plugin'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rb-plugin'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rb-plugin'),
        'archives'              => _x('Task archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rb-plugin'),
        'insert_into_item'      => _x('Insert into Task', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rb-plugin'),
        'uploaded_to_this_item' => _x('Uploaded to this Task', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rb-plugin'),
        'filter_items_list'     => _x('Filter Tasks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rb-plugin'),
        'items_list_navigation' => _x('Tasks list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rb-plugin'),
        'items_list'            => _x('Tasks list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rb-plugin'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'Task'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         =>  array('category', 'post_tag'),
        'show_in_rest'       =>  true,
    );

    register_post_type('Task', $args);
}