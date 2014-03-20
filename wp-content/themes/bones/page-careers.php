<?php
/*
Template Name: Careers
*/
?>

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
					<?php get_template_part( 'news-events' ); ?>
				</div>

				<div class="main-content careers" id="top">
					<?php the_field('top_paragraph'); ?>

					<?php if( have_rows('new_paragraph') ):
					 
					    while ( have_rows('new_paragraph') ) : the_row(); ?>

					        <h1><?php the_sub_field('new_title'); ?></h1>
					        <p><?php the_sub_field('new_content'); ?></p>
		        
					        <a class="full" href="<?php the_sub_field('page_link'); ?>">View</a>
					 <?php endwhile;
					 
					else :

					endif; ?>

					<?php the_field('resources_disclaimer'); ?>
				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
