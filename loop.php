<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); ?>
			</a>
		<?php endif; ?>
		
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<?php the_content(); ?>
		
	</article>	
<?php endwhile; ?>
<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'wpstarter' ); ?></h2>
	</article>
<?php endif; ?>