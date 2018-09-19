<?php
//Global variable redux
global $traveller_options;

$traveller_footer_col     =   $traveller_options ["traveller_footer_column_col"];
$traveller_footer_widthl  =   $traveller_options ["traveller_footer_column_w1"];
$traveller_footer_width2  =   $traveller_options ["traveller_footer_column_w2"];
$traveller_footer_width3  =   $traveller_options ["traveller_footer_column_w3"];
$traveller_footer_width4  =   $traveller_options ["traveller_footer_column_w4"];

if( is_active_sidebar( 'traveller-footer-1' ) || is_active_sidebar( 'traveller-footer-2' ) || is_active_sidebar( 'traveller-footer-3' ) || is_active_sidebar( 'traveller-footer-4' ) ) :

?>

    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <?php
                for( $traveller_i = 0; $traveller_i < $traveller_footer_col; $traveller_i++ ):

                    $traveller_j = $traveller_i +1;

                    if ( $traveller_i == 0 ) :
                        $traveller_col = $traveller_footer_widthl;
                    elseif ( $traveller_i == 1 ) :
                        $traveller_col = $traveller_footer_width2;
                    elseif ( $traveller_i == 2 ) :
                        $traveller_col = $traveller_footer_width3;
                    else :
                        $traveller_col = $traveller_footer_width4;
                    endif;

                    if( is_active_sidebar( 'traveller-footer-'.$traveller_j ) ):
                ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-<?php echo esc_attr( $traveller_col ); ?>">

                        <?php dynamic_sidebar( 'traveller-footer-'.$traveller_j ); ?>

                    </div>

                <?php
                    endif;

                endfor;
                ?>
            </div>
        </div>
    </div>

<?php endif; ?>