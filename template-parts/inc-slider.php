<?php

global $traveller_options;

$traveller_slider_global    =   $traveller_options['traveller_slider_global'];
$traveller_slider_auto      =   $traveller_options['traveller_slider_auto'];

if ( !empty( $traveller_slider_global ) ) :

$traveller_slider_global_arr = explode( ",",$traveller_slider_global );

$traveller_slider_settings = [
    'loop'      =>  true,
    'autoplay'  =>  $traveller_slider_auto,
];

?>

    <div class="slider-global owl-carousel owl-theme" data-settings='<?php echo esc_attr( wp_json_encode( $traveller_slider_settings ) ); ?>'>
        <?php foreach( $traveller_slider_global_arr as $item ) : ?>

            <div class="slider-global__item">
                <?php echo wp_get_attachment_image( $item, 'full' ); ?>
            </div>

        <?php endforeach; ?>
    </div>

<?php endif; ?>