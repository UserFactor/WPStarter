<?php get_header(); ?>

	<section role="main">
	
	<?php if (have_posts()): the_post(); ?>
	
		<h1><?php _e( 'Author Archives for ', 'wpstarter' ); echo get_the_author(); ?></h1>

	<?php if ( get_the_author_meta('description')) : ?>
	
		<h2><?php _e( 'About', 'wpstarter' ); echo get_the_author() ; ?></h2>
	
		<?php the_author_meta('description'); ?>
	
	<?php endif; ?>
	
	<?php rewind_posts(); while (have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'wpstarter' ); ?></h2>
		</article>
	
	<?php endif; ?>
    
		<?php get_template_part('pagination'); ?>
	
	</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>