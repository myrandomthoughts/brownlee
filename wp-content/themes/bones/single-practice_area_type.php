<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin-news-events-muni'); ?>

					<?php
					$practice_areas = get_field('practice_area');

					if( $practice_areas ): 
					 	foreach ($practice_areas as $k => $pid) {
					 		print '<a href="'. get_page_link($pid) .'">'. get_the_title($pid) .'</a>';
					 	}
					 
					 endif; 
					 ?>
				
				</div>

				<div class="single-wrap main-content">
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
