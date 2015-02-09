<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 */
?>

	</div><!-- #content -->
	

	
	
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info wrap row">
			<div class="fcred col-12">
				Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br />
<?php fflink(); ?> 
			</div>		

		</div><!-- .site-info -->
	</div>	
</footer><!-- #colophon .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
