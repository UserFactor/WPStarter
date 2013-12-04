		<footer class="mainfooter" role="contentinfo">
		
		<?php if ( is_active_sidebar('footer-widget') ) : ?>
    			<?php dynamic_sidebar('footer-widget') ?>
		<?php endif; ?>
		
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
		</footer>

	</div><!-- close wrapper -->
<?php wp_footer(); ?>
</body>
</html>
