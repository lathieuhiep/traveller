<?php

    $traveller_audio = get_post_meta(  get_the_ID() , '_format_audio_embed', true );
    if( $traveller_audio != '' ):

?>
        <div class="site-post-audio">

            <?php if( wp_oembed_get( $traveller_audio ) ) : ?>

                <?php echo wp_oembed_get( $traveller_audio ); ?>

            <?php else : ?>

                <?php echo balanceTags( $traveller_audio ); ?>

            <?php endif; ?>

        </div>

<?php endif;?>