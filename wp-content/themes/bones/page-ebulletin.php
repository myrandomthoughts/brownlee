<?php
/*
Template Name: E-Bulletins
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php the_field('top_banner'); ?>" alt="Top Banner" width="894" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'news-events' ); ?>
				</div>

				<div class="main-content">
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

				<?php if( have_rows('new_paragraph') ):
				 
				    while ( have_rows('new_paragraph') ) : the_row(); ?>

				        <h1><?php the_sub_field('new_title'); ?></h1>
				        <p><?php the_sub_field('new_content'); ?></p>

				        <a class="full" href="<?php  the_sub_field('page_link'); ?>">Archives</a>
					    <a class="full" href="<?php print get_page_link(528); ?>">Subscribe</a>

				 <?php endwhile;
				 
				else :

				endif; ?>

				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
