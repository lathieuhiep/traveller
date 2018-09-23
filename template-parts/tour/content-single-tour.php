<div class="site-single-tour__top">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php
            get_template_part( 'template-parts/tour/content','image-tour' );

            get_template_part( 'template-parts/tour/content','tour-info' );
            ?>
        </div>

        <div class="col-12 col-md-4"></div>
    </div>
</div>

<?php

get_template_part( 'template-parts/tour/content','detail-tour' );