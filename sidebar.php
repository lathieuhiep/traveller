
<?php if( is_active_sidebar( 'traveller-sidebar' ) ): ?>

    <aside class="<?php echo esc_attr( traveller_col_sidebar() ); ?> site-sidebar">
        <?php dynamic_sidebar( 'traveller-sidebar' ); ?>
    </aside>

<?php endif; ?>