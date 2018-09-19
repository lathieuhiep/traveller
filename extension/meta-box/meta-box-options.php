<?php

/* Option Metabox Post */
add_action( 'cmb2_admin_init', 'traveller_option_metaboxes' );

function traveller_option_metaboxes() {

    /**
     * Initiate the metabox
     */
    $traveller_metabox_post = new_cmb2_box( array(
        'id'            => 'traveller_metabox_post',
        'title'         => __( 'Test Metabox', 'traveller' ),
        'object_types'  => array( 'post', ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    // Regular text field
    $traveller_metabox_post->add_field( array(
        'name'       => __( 'Test Text', 'traveller' ),
        'desc'       => __( 'field description (optional)', 'traveller' ),
        'id'         => 'traveller_metabox_post_text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // URL text field
    $traveller_metabox_post->add_field( array(
        'name' => __( 'Website URL', 'traveller' ),
        'desc' => __( 'field description (optional)', 'traveller' ),
        'id'   => 'traveller_metabox_post_url',
        'type' => 'text_url',
    ) );

    // Email text field
    $traveller_metabox_post->add_field( array(
        'name' => __( 'Test Text Email', 'traveller' ),
        'desc' => __( 'field description (optional)', 'traveller' ),
        'id'   => 'traveller_metabox_post_email',
        'type' => 'text_email',
    ) );

    // Group
    $traveller_metabox_post_group_id = $traveller_metabox_post->add_field( array(
        'id'          => 'wiki_test_repeat_group',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'traveller' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'traveller' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'traveller' ),
            'remove_button' => __( 'Remove Entry', 'traveller' ),
            'sortable'      => true, // beta
            'closed'        => true
        ),
    ) );

    $traveller_metabox_post->add_group_field( $traveller_metabox_post_group_id, array(
        'name' => 'Entry Title',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $traveller_metabox_post->add_group_field( $traveller_metabox_post_group_id, array(
        'name' => 'Description',
        'description' => 'Write a short description for this entry',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );

    $traveller_metabox_post->add_group_field( $traveller_metabox_post_group_id, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ) );

    $traveller_metabox_post->add_group_field( $traveller_metabox_post_group_id, array(
        'name' => 'Image Caption',
        'id'   => 'image_caption',
        'type' => 'text',
    ) );

}