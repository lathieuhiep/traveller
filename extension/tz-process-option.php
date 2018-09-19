<?php
    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */
    if( !is_admin() ):

        add_action('wp_head','traveller_config_theme');

        function traveller_config_theme() {

            if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) :

                    global $traveller_options;
                    $traveller_favicon = $traveller_options['traveller_favicon_upload']['url'];

                    if( $traveller_favicon != '' ) :

                        echo '<link rel="shortcut icon" href="' . esc_url($traveller_favicon) . '" type="image/x-icon" />';

                    endif;

            endif;
        }

        // Method add custom css, Css custom add here
        // Inline css add here
        /**
         * Enqueues front-end CSS for the custom css.
         *
         * @see wp_add_inline_style()
         */

        add_action( 'wp_enqueue_scripts', 'traveller_custom_css', 99 );

        function traveller_custom_css() {

            global $traveller_options;

            $traveller_typo_selecter_1   =   $traveller_options['traveller_custom_typography_1_selector'];

            $traveller_typo1_font_family   =   $traveller_options['traveller_custom_typography_1']['font-family'] == '' ? '' : $traveller_options['traveller_custom_typography_1']['font-family'];

            $traveller_css_style = '';

            if ( $traveller_typo1_font_family != '' ) :
                $traveller_css_style .= ' '.esc_attr( $traveller_typo_selecter_1 ).' { font-family: '.balanceTags( $traveller_typo1_font_family, true ).' }';
            endif;

            if ( $traveller_css_style != '' ) :
                wp_add_inline_style( 'traveller-style', $traveller_css_style );
            endif;

        }

    endif;
