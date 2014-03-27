<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner-single' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>

					<div class="sidebar">
						<h4>Practice Team</h4>
						<?php 
				 		
				 		$lawyers = get_posts(array(
							'post_type' => 'biography',
							'order' => 'ASC',
							'orderby'   => 'meta_value',
							'meta_query' => array(
								array(
									'key' => 'practice_area_relationship', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));
						
						?>
						
						<ul>
						<?php 
						if( $lawyers ): 
							$sorted_lawyers = array();
						 	foreach ($lawyers as $k => $lawyer) {
						 		$sorted_lawyers[get_the_title($lawyer->ID)] = get_page_link($lawyer->ID);
						 	}
						 	ksort($sorted_lawyers);
						 	foreach ($sorted_lawyers as $name => $url) {
						 		print '<li><a href="'. $url .'">'. $name .'</a></li>';
						 	}
						 
						 endif; 
						 ?>
						</ul>

						<h4>Related Practice Areas</h4>
						<?php

						$practice_areas = get_field('practice_area'); ?>

						<ul>
						<?php
						if( $practice_areas ): 
						 	foreach ($practice_areas as $k => $pid) {
						 		print '<li><a href="'. get_page_link($pid) .'">'. get_the_title($pid) .'</a></li>';
						 	}
						 
						 endif; 
						 ?>
						</ul>
					</div>
				</div>

				<div class="single-wrap main-content">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
					<?php if( have_rows('new_paragraph') ):
				 
				    while ( have_rows('new_paragraph') ) : the_row(); ?>

				        <h1><?php the_sub_field('new_title'); ?></h1>
				        <p><?php the_sub_field('new_content'); ?></p>

					 <?php endwhile;
				 
					else :

					endif; ?>
					</div>
			</div><!--end of single-->

<?php get_footer(); ?>
