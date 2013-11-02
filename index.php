<?php get_header(); ?>

	<section role="main">
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>