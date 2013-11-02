<?php get_header(); ?>
<section role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><?php _e('Error 404 - Page Not Found','wpstarter'); ?></h2>
        <p><a href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'wpstarter' ); ?></a></p>
    </article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>