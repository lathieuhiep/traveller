<?php

/* Option Meta Box Post */
add_action( 'cmb2_admin_init', 'traveller_option_meta_boxes' );

function traveller_option_meta_boxes() {

    /**
     * Option Meta Box Post
     */
    $traveller_meta_box_post = new_cmb2_box( array(
        'id'            =>  'traveller_meta_box_post',
        'title'         =>  esc_html__( 'Test Metabox', 'traveller' ),
        'object_types'  =>  array( 'post', ),
        'context'       =>  'normal',
        'priority'      =>  'high',
        'show_names'    =>  true,
    ) );

    // Regular text field
    $traveller_meta_box_post->add_field( array(
        'name'          =>  esc_html__( 'Test Text', 'traveller' ),
        'desc'          =>  esc_html__( 'field description (optional)', 'traveller' ),
        'id'            =>  'traveller_meta_box_post_text',
        'type'          =>  'text',
        'show_on_cb'    =>  'cmb2_hide_if_no_cats',
    ) );

    // URL text field
    $traveller_meta_box_post->add_field( array(
        'name'  =>  esc_html__( 'Website URL', 'traveller' ),
        'desc'  =>  esc_html__( 'field description (optional)', 'traveller' ),
        'id'    =>  'traveller_meta_box_post_url',
        'type'  =>  'text_url',
    ) );

    // Email text field
    $traveller_meta_box_post->add_field( array(
        'name'  =>  esc_html__( 'Test Text Email', 'traveller' ),
        'desc'  =>  esc_html__( 'field description (optional)', 'traveller' ),
        'id'    =>  'traveller_meta_box_post_email',
        'type'  =>  'text_email',
    ) );

    // Group
    $traveller_meta_box_post_group_id = $traveller_meta_box_post->add_field( array(
        'id'            =>  'wiki_test_repeat_group',
        'type'          =>  'group',
        'description'   =>  esc_html__( 'Generates reusable form entries', 'traveller' ),
        'options'       =>  array(
            'group_title'   =>  esc_html__( 'Entry {#}', 'traveller' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    =>  esc_html__( 'Add Another Entry', 'traveller' ),
            'remove_button' =>  esc_html__( 'Remove Entry', 'traveller' ),
            'sortable'      =>  true, // beta
            'closed'        =>  true
        ),
    ) );

    $traveller_meta_box_post->add_group_field( $traveller_meta_box_post_group_id, array(
        'name' => 'Entry Title',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $traveller_meta_box_post->add_group_field( $traveller_meta_box_post_group_id, array(
        'name'          =>  'Description',
        'id'            =>  'description',
        'type'          =>  'textarea_small',
        'description'   =>  'Write a short description for this entry',
    ) );

    $traveller_meta_box_post->add_group_field( $traveller_meta_box_post_group_id, array(
        'name'  =>  'Entry Image',
        'id'    =>  'image',
        'type'  =>  'file',
    ) );

    $traveller_meta_box_post->add_group_field( $traveller_meta_box_post_group_id, array(
        'name'  =>  'Image Caption',
        'id'    =>  'image_caption',
        'type'  =>  'text',
    ) );


    /**
     * Option Meta Box Tour
     */
    $traveller_meta_box_tour = new_cmb2_box( array(
        'id'            =>  'traveller_meta_box_tour',
        'title'         =>  esc_html__( 'Option Tour', 'traveller' ),
        'object_types'  =>  array( 'tour', ),
        'context'       =>  'normal',
        'priority'      =>  'high',
        'show_names'    =>  true,
    ) );

    // Gallery
    $traveller_meta_box_tour->add_field( array(
        'id'            =>  'traveller_meta_box_tour_gallery',
        'name'          =>  esc_html__( 'Gallery', 'traveller' ),
        'desc'          =>  esc_html__( 'Upload Images', 'traveller' ),
        'type'          =>  'file_list',
        'text' => array(
            'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ) );

}