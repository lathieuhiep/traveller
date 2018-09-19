<?php

$traveller_video_post = get_post_meta(  get_the_ID() , 'traveller_video_post', true );

if ( !empty( $traveller_video_post ) ):

?>

    <div class="site-post-video">
        <?php echo wp_oembed_get( $traveller_video_post ); ?>
    </div>

<?php endif;?>