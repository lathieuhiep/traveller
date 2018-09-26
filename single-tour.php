<?php
get_header();
?>

    <div class="site-container site-single-tour">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) : the_post();

                    get_template_part( 'template-parts/tour/content','single-tour' );

                endwhile;

                if( is_active_sidebar( 'traveller-sidebar-single-tour' ) ):
                ?>

                    <aside class="col-12 col-md-4 site-sidebar">
                        <?php dynamic_sidebar( 'traveller-sidebar-single-tour' ); ?>
                    </aside>

                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_footer();