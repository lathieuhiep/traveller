<?php
get_header();
?>

    <div class="site-container site-single-tour">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">

                    <?php
                    if ( have_posts() ) : while (have_posts()) : the_post();

                        get_template_part( 'template-parts/tour/content','single-tour' );

                    endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();