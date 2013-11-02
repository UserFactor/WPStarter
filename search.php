<?php get_header(); ?>
<section role="main">
	<?php if (have_posts()) : ?>

		<h1><?php echo sprintf( __( '%s Search Results for ', 'wpstarter' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		
		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>
		<?php get_template_part('pagination'); ?>
	
	<?php else : ?>
		<h2><?php _e('Nothing Found','wpstarter'); ?></h2>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>