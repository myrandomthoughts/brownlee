<?php
/*
Template Name: E-Bulletins
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

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
