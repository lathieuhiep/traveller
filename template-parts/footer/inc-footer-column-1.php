<?php
//Global variable redux
global $traveller_options;

$traveller_footer_multi_column_1     =   $traveller_options ['traveller_footer_multi_column_1'];
$traveller_footer_multi_column_1_w1  =   $traveller_options ['traveller_footer_multi_column_1_w1'];
$traveller_footer_multi_column_1_w2  =   $traveller_options ['traveller_footer_multi_column_1_w2'];
$traveller_footer_multi_column_1_w3  =   $traveller_options ['traveller_footer_multi_column_1_w3'];
$traveller_footer_multi_column_1_w4  =   $traveller_options ['traveller_footer_multi_column_1_w4'];

if( is_active_sidebar( 'traveller-footer-1-1' ) || is_active_sidebar( 'traveller-footer-1-2' ) || is_active_sidebar( 'traveller-footer-1-3' ) || is_active_sidebar( 'traveller-footer-1-4' ) ) :
?>

    <div class="item-multi-column">
        <div class="row">
            <?php
            for( $traveller_i = 0; $traveller_i < $traveller_footer_multi_column_1; $traveller_i++ ):

                $traveller_j = $traveller_i +1;

                if ( $traveller_i == 0 ) :
                    $traveller_col = $traveller_footer_multi_column_1_w1;
                elseif ( $traveller_i == 1 ) :
                    $traveller_col = $traveller_footer_multi_column_1_w2;
                elseif ( $traveller_i == 2 ) :
                    $traveller_col = $traveller_footer_multi_column_1_w3;
                else :
                    $traveller_col = $traveller_footer_multi_column_1_w4;
                endif;

                if( is_active_sidebar( 'traveller-footer-1-'.$traveller_j ) ):
                ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-<?php echo esc_attr( $traveller_col ); ?>">

                        <?php dynamic_sidebar( 'traveller-footer-1-'.$traveller_j ); ?>

                    </div>

                <?php
                endif;

            endfor;
            ?>
        </div>
    </div>

<?php endif; ?>