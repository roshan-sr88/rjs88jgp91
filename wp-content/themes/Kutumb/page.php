<?php
 /*
 Template Name: Full Width
 */
get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3> <?php the_title();     
      ?> </h3>
				<p> </p>
			</div>
			
		</div>
	</div>
</div>

<div class="container-fluid" style="padding-left: 100px;padding-right: 80px">	
	<div class="row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div>
<?php get_footer(); ?>
