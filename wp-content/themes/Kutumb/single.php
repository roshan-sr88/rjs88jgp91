<?php
/**
 * The Template for displaying all single posts.
 *
 * @package web2feel
 */

get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php 
				$port_cat =ft_of_get_option('fabthemes_portfolio');
				if (in_category($port_cat)) { ?>
				<h3> Image Gallery </h3> 
				<?php } else { ?>
				<h3> Our Programs </h3> 
				<?php } ?>
			</div>
			
		</div>
	</div>
</div>

<div class="container">	
	<div class="row">
	<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>