<?php

global $traveller_options;

$traveller_show_loading = $traveller_options['traveller_general_show_loading'] == '' ? '0' : $traveller_options['traveller_general_show_loading'];

if(  $traveller_show_loading == 1 ) :

    $traveller_loading_url  = $traveller_options['traveller_general_image_loading']['url'];
?>

    <div id="site-loadding" class="d-flex align-items-center justify-content-center">

        <?php  if( $traveller_loading_url !='' ): ?>

            <img class="loading_img" src="<?php echo esc_url( $traveller_loading_url ); ?>" alt="<?php esc_attr_e('loading...','traveller') ?>"  >

        <?php else: ?>

            <img class="loading_img" src="<?php echo esc_url(get_theme_file_uri( '/images/loading.gif' )); ?>" alt="<?php esc_attr_e('loading...','traveller') ?>">

        <?php endif; ?>

    </div>

<?php endif; ?>