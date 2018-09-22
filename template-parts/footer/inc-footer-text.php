<?php
//Global variable redux
global $traveller_options;

$traveller_copyright = $traveller_options ['traveller_footer_copyright_editor'] == '' ? 'Copyright &amp; Templaza' : $traveller_options ['traveller_footer_copyright_editor'];

?>

<div class="site-footer__text">
    <div class="container">
        <div class="site-copyright-menu d-flex align-items-center">
            <div class="site-footer__menu">
                <nav>

                    <?php

                    if ( has_nav_menu( 'footer-menu' ) ) :

                        wp_nav_menu( array(
                            'theme_location'    => 'footer-menu',
                            'menu_class'        => 'menu-footer',
                            'container'         =>  false,
                        ));

                    else:

                    ?>

                        <ul class="main-menu">
                            <li>
                                <a href="<?php echo get_admin_url().'/nav-menus.php'; ?>">
                                    <?php esc_html_e( 'ADD TO MENU','traveller' ); ?>
                                </a>
                            </li>
                        </ul>

                    <?php endif;?>

                </nav>
            </div>

            <div class="site-footer__social d-flex align-items-center">
                <p class="txt-connect">
                    <?php esc_html_e( 'Kết nối với chúng tôi', 'traveller' ); ?>
                </p>

                <div class="site-footer__social-list d-flex align-items-center social-network-toTopFromBottom">
                    <?php traveller_get_social_url(); ?>
                </div>
            </div>
        </div>
    </div>
</div>