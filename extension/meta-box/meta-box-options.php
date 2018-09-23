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
        'tabs'      => array(

            'tab_gallery' => array(
                'label' =>  esc_html__( 'Gallery', 'traveller' ),
                'icon'  =>  'dashicons-format-gallery',
            ),

            'tab_general'  => array(
                'label' =>  esc_html__( 'General', 'traveller' ),
                'icon'  =>  'dashicons-admin-tools',
            ),

            'tab_itinerary'  => array(
                'label' =>  esc_html__( 'Lịch Trình', 'traveller' ),
                'icon'  =>  'dashicons-calendar-alt',
            ),

            'tab_note'  => array(
                'label' =>  esc_html__( 'Ghi Chú', 'traveller' ),
                'icon'  =>  'dashicons-edit',
            ),

        ),

        'tab_style' =>  'default',

    ) );

    // Gallery
    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_gallery',
        'name'  =>  esc_html__( 'Gallery', 'traveller' ),
        'type'  =>  'file_list',
        'tab'   =>  'tab_gallery',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
        'text'  =>  array(
            'add_upload_files_text' =>  esc_html__( 'Upload Images', 'traveller' ),
            'remove_image_text'     =>  esc_html__( 'Remove Image', 'traveller' ),
        ),
    ) );

    // General
    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_regular_price',
        'name'  =>  esc_html__( 'Giá Tour' ),
        'type'  =>  'text',
        'tab'   =>  'tab_general',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
        'before_field' => '₫',
    ) );

    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_sale_price',
        'name'  =>  esc_html__( 'Giá Tour Khuyến Mãi' ),
        'type'  =>  'text',
        'tab'   =>  'tab_general',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
        'before_field' => '₫',
    ) );

    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_suk',
        'name'  =>  esc_html__( 'Mã Tour' ),
        'type'  =>  'text',
        'desc'  =>  'DLTN-CBT-HPCB01',
        'tab'   =>  'tab_general',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_time',
        'name'  =>  esc_html__( 'Thời Gian Tour' ),
        'type'  =>  'text',
        'desc'  =>  '2 Ngày 1 Đêm',
        'tab'   =>  'tab_general',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

    $traveller_meta_box_tour->add_field( array(
        'id'    =>  'traveller_meta_box_tour_start',
        'name'  =>  esc_html__( 'Thời Gian Khời hành' ),
        'type'  =>  'text',
        'desc'  =>  '15/8; 15/9;12,26/10; 8,22,30/11',
        'tab'   =>  'tab_general',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

    // Itinerary
    $traveller_meta_box_tour_group = $traveller_meta_box_tour->add_field( array(
        'id'            =>  'traveller_meta_box_tour_group_itinerary',
        'type'          =>  'group',
        'tab'           =>  'tab_itinerary',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
        'options'       =>  array(
            'group_title'   =>  esc_html__( 'Ngày {#}', 'traveller' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    =>  esc_html__( 'Add Another Entry', 'traveller' ),
            'remove_button' =>  esc_html__( 'Remove Entry', 'traveller' ),
            'closed'        =>  true
        ),
    ) );

    $traveller_meta_box_tour->add_group_field( $traveller_meta_box_tour_group, array(
        'id'   => 'title',
        'name' => esc_html__( 'Tiêu Đề 1', 'traveller' ),
        'type' => 'text',
        'default'   =>  'Ngày 1'
    ) );

    $traveller_meta_box_tour->add_group_field( $traveller_meta_box_tour_group, array(
        'id'   => 'sub_title',
        'name' => esc_html__( 'Tiêu Đề 2', 'traveller' ),
        'type' => 'text',
    ) );

    $traveller_meta_box_tour->add_group_field( $traveller_meta_box_tour_group, array(
        'id'   => 'content',
        'name' => esc_html__( 'Nội Dung', 'traveller' ),
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 15,
        )
    ) );

    // Note
    $traveller_meta_box_tour->add_field( array(
        'id'   => 'traveller_meta_box_tour_note',
        'name' => esc_html__( 'Ghi Chú', 'traveller' ),
        'type' => 'wysiwyg',
        'tab'   =>  'tab_note',
        'render_row_cb' =>  array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

}