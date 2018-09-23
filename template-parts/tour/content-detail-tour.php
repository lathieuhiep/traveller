<?php

$traveller_meta_box_tour_group_itinerary    =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_group_itinerary', true );
$traveller_meta_box_tour_note               =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_note', true );

?>

<div class="site-single-tour__bottom">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="content-detail-tour">
                <div id="item-group-content-tour" class="item-group">
                    <h3 class="title-main">
                        <?php esc_html_e( 'Tổng Quan', 'traveller' ); ?>
                    </h3>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div id="item-group-itinerary-tour" class="item-group">
                    <h3 class="title-main">
                        <?php esc_html_e( 'Chương trình tour', 'traveller' ); ?>
                    </h3>

                    <div class="content content-itinerary">
                        <?php foreach ( $traveller_meta_box_tour_group_itinerary as $item_key => $item_value ) : ?>

                            <div class="item-itinerary">
                                <h4 class="item-itinerary__title">
                                    <span>
                                        <?php echo esc_html( $item_value['title'] ); ?>
                                    </span>

                                    <?php echo esc_html( $item_value['sub_title'] ); ?>
                                </h4>

                                <div class="item-itinerary__content">
                                    <?php echo wpautop( $item_value['content'] );  ?>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="item-group-note-tour" class="item-group">
                    <h3 class="title-main">
                        <?php esc_html_e( 'Ghi chú', 'traveller' ); ?>
                    </h3>

                    <div class="content">
                        <?php echo wpautop( $traveller_meta_box_tour_note ); ?>
                    </div>
                </div>
            </div>
        </div>


        <?php if( is_active_sidebar( 'traveller-sidebar-single-tour' ) ): ?>

            <aside class="col-12 col-md-4 site-sidebar">
                <?php dynamic_sidebar( 'traveller-sidebar-single-tour' ); ?>
            </aside>

        <?php endif; ?>
    </div>
</div>