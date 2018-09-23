<?php

$traveller_meta_box_tour_regular_price  =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_regular_price', true );
$traveller_meta_box_tour_sale_price     =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_sale_price', true );
$traveller_meta_box_tour_suk            =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_suk', true );
$traveller_meta_box_tour_time           =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_time', true );
$traveller_meta_box_tour_start          =   get_post_meta( get_the_ID(), 'traveller_meta_box_tour_start', true );

?>

<div class="single-info-tour">
    <h1 class="title">
        <?php the_title(); ?>
    </h1>

    <div class="single-info-tour__box d-flex">
        <div class="single-info-tour__meta">
            <div class="item item-price">
                <span class="price">
                    <?php if ( !empty( $traveller_meta_box_tour_sale_price ) ) : ?>

                        <del>
                            <?php echo esc_html( number_format( $traveller_meta_box_tour_regular_price,0,'','.' ) . 'đ' ); ?>
                        </del>
                        &minus;
                        <ins>
                            <?php echo esc_html( number_format( $traveller_meta_box_tour_sale_price,0,'','.' ) . 'đ' ); ?>
                        </ins>

                    <?php
                    else:
                        echo esc_html( number_format( $traveller_meta_box_tour_regular_price,0,'','.' ) . 'đ' );
                    endif;
                    ?>
                </span>
            </div>

            <div class="item item-code">
                <span class="title-label">
                    <?php esc_html_e( 'Mã Tour:', 'traveller' ); ?>
                </span>

                <span class="code-tour">
                    <?php echo esc_html( $traveller_meta_box_tour_suk ); ?>
                </span>
            </div>

            <div class="item item-time">
                <span class="title-label">
                    <?php esc_html_e( 'Thời gian:', 'traveller' ); ?>
                </span>

                <span class="code-tour">
                    <?php echo esc_html( $traveller_meta_box_tour_time ); ?>
                </span>
            </div>

            <div class="item item-start-tour">
                <span class="title-label">
                    <?php esc_html_e( 'Ngày khởi hành:', 'traveller' ); ?>
                </span>

                <span class="start-tour">
                    <?php echo esc_html( $traveller_meta_box_tour_start ); ?>
                </span>
            </div>
        </div>

        <div class="single-info-tour__order">
            <div class="btn-tour-order type-btn-1">
                <a href="#">
                    <strong>
                        <?php esc_html_e( 'Đặt tour ngay', 'traveller' ); ?>
                    </strong>

                    <span>
                        <?php esc_html_e( 'Đặt nhanh - giá tốt, ưu đãi nhiều hơn', 'traveller' ); ?>
                    </span>
                </a>
            </div>

            <div class="btn-tour-order type-btn-2">
                <a href="#">
                    <strong>
                        <?php esc_html_e( 'Đặt yêu cầu', 'traveller' ); ?>
                    </strong>

                    <span>
                        <?php esc_html_e( 'Đặt vấn đề - có ngay thứ bạn muốn', 'traveller' ); ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>