<div id="slidebox" class="flexslider">

		<ul class="slides">
		    <?php 	$count = ft_of_get_option('fabthemes_slide_number');
					$slidecat =ft_of_get_option('fabthemes_slide_categories');
					
					$query = new WP_Query( array( 'cat' =>$slidecat,'posts_per_page' =>$count ) );
		           	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>
		 	
			 		<li>
			 			
					<?php
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 1200, 350, true ); //resize & crop the image
					?>
					
					<?php if($image) : ?>
						<a href="<?php the_permalink(); ?>"><img  src="<?php echo $image ?>"/></a>
					<?php endif; ?>
	
					<div class="flex-caption" style="color: #dabebe">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a class="frmore" href="<?php the_permalink(); ?>"> READ MORE </a>
					</div>
			<?php endwhile; endif; ?>
					    		
		  </li>
		</ul>
</div>

<div class="fwidgets">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4 homewidget">
				
				<span><img src="https://cdn4.iconfinder.com/data/icons/wedding-2/500/Diamond_jewel_jewelry_love_marriage_ring_wedding-512.png"></img></span>
				<h3> <?php echo ft_of_get_option('fabthemes_left_title'); ?></h3>
				<p> <?php echo ft_of_get_option('fabthemes_left_text'); ?>
                    <a class="frmore" href="<?php echo (get_home_url()."/about-us/"); ?>"> READ MORE </a> </p>
			</div>	

			
			<div class="col-sm-4 homewidget">
				<span><img src="https://cdn2.iconfinder.com/data/icons/communication-2/512/Speech_Bubbles-512.png"></img></span>
				<h3>  <?php echo ft_of_get_option('fabthemes_middle_title'); ?></h3>
				<p> <?php echo ft_of_get_option('fabthemes_middle_text'); ?>
                    <a class="frmore"href="<?php echo (get_home_url()."/about-us/"); ?>"> READ MORE </a> </p>
			</div>	
			
			<div class="col-sm-4 homewidget">
				<span><img src="https://cdn4.iconfinder.com/data/icons/education-training/33/meeting-512.png"></img></span>
				<h3> <?php echo  ft_of_get_option('fabthemes_right_title'); ?></h3>
				<p> <?php echo ft_of_get_option('fabthemes_right_text'); ?>
                   <a class="frmore"href="<?php echo (get_home_url()."/about-us/"); ?>"> READ MORE </a> </p>
                </div>
		</div>
	</div>
</div>

