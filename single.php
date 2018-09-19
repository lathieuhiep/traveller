<?php
get_header();

global $traveller_options;

$traveller_blog_sidebar_single = !empty( $traveller_options['traveller_blog_sidebar_single'] ) ? $traveller_options['traveller_blog_sidebar_single'] : 'right';

$traveller_class_col_content = traveller_col_use_sidebar( $traveller_blog_sidebar_single, 'traveller-sidebar' );

?>

<div class="site-container site-single">
    <div class="container">
        <div class="row">

            <?php

            if( $traveller_blog_sidebar_single == 'left' ):
                get_sidebar();
            endif;

            ?>

            <div class="<?php echo esc_attr( $traveller_class_col_content ); ?>">

                <?php
                if ( have_posts() ) : while (have_posts()) : the_post();

                    get_template_part( 'template-parts/post/content','single' );

                    endwhile;
                endif;
                ?>

            </div>

            <?php

            if( $traveller_blog_sidebar_single == 'right' ):
                get_sidebar();
            endif;

            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

