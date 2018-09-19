<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class traveller_post_type extends Widget_Base {

    public function get_categories() {
        return array( 'traveller_widgets' );
    }

    public function get_name() {
        return 'traveller-post-type';
    }

    public function get_title() {
        return esc_html__( 'Basic theme Post Type', 'traveller' );
    }

    public function get_icon() {
        return ' eicon-post';
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_post_type',
            [
                'label' =>  esc_html__( 'Post Type', 'traveller' )
            ]
        );

        $this->add_control(
            'post_type_title',
            [
                'label'         =>  esc_html__( 'Title', 'traveller' ),
                'type'          =>  Controls_Manager::TEXT,
                'default'       =>  esc_html__( 'Post', 'traveller' ),
                'label_block'   =>  true
            ]
        );

        $this->add_control(
            'post_type__column_number',
            [
                'label'     =>  esc_html__( 'Column', 'traveller' ),
                'type'      =>  Controls_Manager::SELECT,
                'default'   =>  3,
                'options'   =>  [
                    4   =>  esc_html__( '4 Column', 'traveller' ),
                    3   =>  esc_html__( '3 Column', 'traveller' ),
                    2   =>  esc_html__( '2 Column', 'traveller' ),
                    1   =>  esc_html__( '1 Column', 'traveller' ),
                ],
            ]
        );

        $this->add_control(
            'post_type_select_cat',
            [
                'label'         =>  esc_html__( 'Select Category Post', 'traveller' ),
                'type'          =>  Controls_Manager::SELECT2,
                'options'       =>  traveller_check_get_cat( 'category' ),
                'multiple'      =>  true,
                'label_block'   =>  true
            ]
        );

        $this->add_control(
            'post_type_limit',
            [
                'label'     =>  esc_html__( 'Number of Posts', 'traveller' ),
                'type'      =>  Controls_Manager::NUMBER,
                'default'   =>  6,
                'min'       =>  1,
                'max'       =>  100,
                'step'      =>  1,
            ]
        );

        $this->add_control(
            'post_type_order_by',
            [
                'label'     =>  esc_html__( 'Order By', 'traveller' ),
                'type'      =>  Controls_Manager::SELECT,
                'default'   =>  'id',
                'options'   =>  [
                    'id'            =>  esc_html__( 'Post ID', 'traveller' ),
                    'author'        =>  esc_html__( 'Post Author', 'traveller' ),
                    'title'         =>  esc_html__( 'Title', 'traveller' ),
                    'date'          =>  esc_html__( 'Date', 'traveller' ),
                    'rand'          =>  esc_html__( 'Random', 'traveller' ),
                    'comment_count' =>  esc_html__( 'Comment count', 'traveller' ),
                ],
            ]
        );

        $this->add_control(
            'post_type_order',
            [
                'label'     =>  esc_html__( 'Order', 'traveller' ),
                'type'      =>  Controls_Manager::SELECT,
                'default'   =>  'ASC',
                'options'   =>  [
                    'ASC'   =>  esc_html__( 'Ascending', 'traveller' ),
                    'DESC'  =>  esc_html__( 'Descending', 'traveller' ),
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {

        $settings       =   $this->get_settings_for_display();
        $cat_post       =   $settings['post_type_select_cat'];
        $limit_post     =   $settings['post_type_limit'];
        $order_by_post  =   $settings['post_type_order_by'];
        $order_post     =   $settings['post_type_order'];

        if ( !empty( $cat_post ) ) :

            $traveller_post_type_arg = array(
                'post_type'         =>  'post',
                'posts_per_page'    =>  $limit_post,
                'orderby'           =>  $order_by_post,
                'order'             =>  $order_post,
                'cat'               =>  $cat_post
            );

        else:

            $traveller_post_type_arg = array(
                'post_type'         =>  'post',
                'posts_per_page'    =>  $limit_post,
                'orderby'           =>  $order_by_post,
                'order'             =>  $order_post
            );

        endif;

        $traveller_post_type_query = new \ WP_Query( $traveller_post_type_arg );

        if ( $traveller_post_type_query->have_posts() ) :

    ?>

        <div class="elementor-post-type">

            <?php while ( $traveller_post_type_query->have_posts() ): $traveller_post_type_query->the_post(); ?>

                <h3>
                    <?php the_title(); ?>
                </h3>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>

    <?php

        endif;
    }

}

Plugin::instance()->widgets_manager->register_widget_type( new traveller_post_type );