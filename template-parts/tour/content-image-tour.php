<?php

$traveller_meta_box_tour_gallery = get_post_meta( get_the_ID(), 'traveller_meta_box_tour_gallery', true );

?>

<div class="site-image-tour">
    <?php if ( !empty( $traveller_meta_box_tour_gallery ) ) : ?>

        <div id="site-gallery-tour">

            <?php foreach ( $traveller_meta_box_tour_gallery as $item_id => $item_url ): ?>

                <div class="item-gallery" data-thumb="<?php echo wp_get_attachment_image_src( $item_id, array( 300, 300 ) )[0]; ?>">
                    <?php echo wp_get_attachment_image( $item_id, 'full' ); ?>
                </div>

            <?php endforeach; ?>

        </div>

    <?php
    else:

        the_post_thumbnail( 'full' );

    endif;
    ?>
</div>