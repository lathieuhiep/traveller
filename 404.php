<?php
get_header();

global $traveller_options;

$traveller_title = $traveller_options['traveller_404_title'];
$traveller_content = $traveller_options['traveller_404_editor'];
$traveller_background = $traveller_options['traveller_404_background']['id'];

?>

<div class="site-error text-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <figure class="site-error__image404">
                    <?php
                    if( !empty( $traveller_background ) ):
                        echo wp_get_attachment_image( $traveller_background, 'full' );
                    else:
                        echo'<img src="'.esc_url( get_theme_file_uri( '/images/404.jpg' ) ).'" alt="'.get_bloginfo('title').'" />';
                    endif;
                    ?>
                </figure>
            </div>

            <div class="col-md-6">
                <h1 class="site-title-404">
                    <?php
                    if ( $traveller_title != '' ):
                        echo esc_html( $traveller_title );
                    else:
                        esc_html_e( 'Awww...Do Not Cry', 'traveller' );
                    endif;
                    ?>
                </h1>

                <div id="site-error-content">
                    <?php
                    if ( $traveller_content != '' ) :
                        echo wp_kses_post( $traveller_content );
                    else:
                    ?>
                        <p>
                            <?php esc_html_e( 'It is just a 404 Error!', 'traveller' ); ?>
                            <br />
                            <?php esc_html_e( 'What you are looking for may have been misplaced', 'traveller' ); ?>
                            <br />
                            <?php esc_html_e( 'in Long Term Memory.', 'traveller' ); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div id="site-error-back-home">
                    <a href="<?php echo esc_url( get_home_url('/') ); ?>" title="<?php echo esc_html__('Go to the Home Page', 'traveller'); ?>">
                        <?php esc_html_e('Go to the Home Page', 'traveller'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>