<aside class="sidebar" role="complementary">

<?php wp_nav_menu( array('menu' => 'side') ); ?>

<?php if ( is_active_sidebar('sidebar-widget') ) : ?>
    <?php dynamic_sidebar('sidebar-widget') ?>
<?php endif; ?>

</aside>
