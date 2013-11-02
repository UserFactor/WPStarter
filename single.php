<?php get_header(); ?>
<section role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>	
		</article>
	<?php endwhile; endif; ?>
</section>	
<?php get_sidebar(); ?>
<?php get_footer(); ?>