<?php
/*
*---------------------------------------------------------------------
* This file create and contains the template post type hotel
*---------------------------------------------------------------------
*/

add_action('init', 'traveller_create_hotel', 10);

function traveller_create_hotel() {

    /* Start post type template */
    $labels = array(
        'name'                  =>  _x( 'Hotels', 'post type general name', 'traveller' ),
        'singular_name'         =>  _x( 'Hotels', 'post type singular name', 'traveller' ),
        'menu_name'             =>  _x( 'Hotels', 'admin menu', 'traveller' ),
        'name_admin_bar'        =>  _x( 'All Hotels', 'add new on admin bar', 'traveller' ),
        'add_new'               =>  _x( 'Add New', 'Hotels', 'traveller' ),
        'add_new_item'          =>  esc_html__( 'Add New Hotel', 'traveller' ),
        'edit_item'             =>  esc_html__( 'Edit Hotel', 'traveller' ),
        'new_item'              =>  esc_html__( 'New Hotel', 'traveller' ),
        'view_item'             =>  esc_html__( 'View Hotel', 'traveller' ),
        'all_items'             =>  esc_html__( 'All Hotels', 'traveller' ),
        'search_items'          =>  esc_html__( 'Search Hotels', 'traveller' ),
        'not_found'             =>  esc_html__( 'No template found', 'traveller' ),
        'not_found_in_trash'    =>  esc_html__( 'No template found in trash', 'traveller' ),
        'parent_item_colon'     =>  ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-store',
        'rewrite'            => array('slug' => 'khach-san' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type('hotel', $args );
    /* End post type template */

    /* Start taxonomy prodcut */
    $taxonomy_labels = array(

        'name'              => _x( 'Hotels categories', 'taxonomy general name', 'traveller' ),
        'singular_name'     => _x( 'Hotels category', 'taxonomy singular name', 'traveller' ),
        'search_items'      => __( 'Search template category', 'traveller' ),
        'all_items'         => __( 'All Category', 'traveller' ),
        'parent_item'       => __( 'Parent category', 'traveller' ),
        'parent_item_colon' => __( 'Parent category:', 'traveller' ),
        'edit_item'         => __( 'Edit category', 'traveller' ),
        'update_item'       => __( 'Update category', 'traveller' ),
        'add_new_item'      => __( 'Add New category', 'traveller' ),
        'new_item_name'     => __( 'New category Name', 'traveller' ),
        'menu_name'         => __( 'Categories', 'traveller' ),

    );

    $taxonomy_args = array(

        'labels'            => $taxonomy_labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'danh-muc-khach-san' ),

    );

    register_taxonomy( 'hotel_cat', array( 'hotel' ), $taxonomy_args );
    /* End taxonomy prodcut */

    /* Start tag template */
    $taxonomy_tag_labels = array(
        'name'            =>  _x( 'Hotels tag', 'taxonomy general name', 'traveller' ),
        'singular_name'   =>  _x( 'Tag', 'taxonomy singular name', 'traveller' ),
        'search_items'    =>  esc_html__( 'Search template tag', 'traveller' ),
        'edit_item'       =>  esc_html__( 'Edit Tag', 'traveller' ),
        'update_item'     =>  esc_html__( 'Update Tag', 'traveller' ),
        'add_new_item'    =>  esc_html__( 'Add New Tag', 'traveller' ),
        'new_item_name'   =>  esc_html__( 'New Tag Name', 'traveller' ),
        'menu_name'       =>  esc_html__( 'Tag', 'traveller' ),
    );

    $taxonomy_tag_args = array(
        'hierarchical'      =>  '',
        'labels'            =>  $taxonomy_tag_labels,
        'show_ui'           =>  true,
        'show_admin_column' =>  true,
        "singular_label"    =>  "Hotels Tag",
        'rewrite'           =>  array( 'slug' => 'hotel-tag' ),
    );
    register_taxonomy( 'hotel_tag', array( 'hotel' ), $taxonomy_tag_args );
    /* End tag template */

}