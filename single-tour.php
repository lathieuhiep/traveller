<?php
get_header();
?>

    <div class="site-container site-single-tour">
        <div class="container">
                <?php
                while (have_posts()) : the_post();

                    get_template_part( 'template-parts/tour/content','single-tour' );

                endwhile;
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();