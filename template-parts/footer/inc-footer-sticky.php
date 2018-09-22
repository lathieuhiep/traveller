<?php
//Global variable redux
global $traveller_options;

$traveller_footer_sticky_title     =   $traveller_options ['traveller_footer_sticky_title'];
$traveller_footer_sticky_hotline   =   $traveller_options ['traveller_footer_sticky_hotline'];

?>

<div class="site-footer-fix d-flex">
    <div class="site-footer-fix__left d-flex">
        <p class="text-hotline d-flex align-items-center">
            <?php echo esc_html( $traveller_footer_sticky_title ); ?>
        </p>

        <?php
        if ( !empty( $traveller_footer_sticky_hotline ) ) :

            $total_item = count( $traveller_footer_sticky_hotline );
        ?>

            <div class="list-hotline d-flex align-items-end">

                <?php
                $i = 1;
                foreach ( $traveller_footer_sticky_hotline as $item ) :

                    if ( $i%2 == 1 ) :
                ?>
                    <div class="list-hotline__box">

                    <?php endif; ?>

                        <p class="list-hotline__item">
                            <?php  echo wp_kses_post( $item ); ?>
                        </p>

                    <?php if ( $i%2 == 0 || $i == $total_item ) : ?>

                    </div>

                <?php
                    endif;

                $i++;
                endforeach;
                ?>

            </div>

        <?php endif; ?>
    </div>
</div>
