<?php

$traveller_meta_box_tour_group_itinerary    =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_group_itinerary', true );
$traveller_meta_box_tour_note               =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_note', true );

?>

<div class="col-12 col-md-8">
    <?php
    get_template_part( 'template-parts/tour/content','image-tour' );

    get_template_part( 'template-parts/tour/content','tour-info' );
    ?>
</div>

<div class="col-12 col-md-4">
    <!-- excerpt tour -->
    <div class="content-excerpt-itinerary-tour">
        <h4 class="title">
            <?php echo esc_html_e( 'Tóm tắt lịch trình tour', 'traveller' ); ?>
        </h4>

        <div class="list">
            <?php foreach ( $traveller_meta_box_tour_group_itinerary as $item_key => $item_value ) : ?>

                <div class="item">
                    <h5 class="item-title">
                        <?php echo esc_html( $item_value['title'] ); ?>:
                    </h5>

                    <p class="item-sub-title">
                        <?php echo esc_html( $item_value['sub_title'] ); ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="col-12 col-md-8">
    <!-- detail tour -->
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




