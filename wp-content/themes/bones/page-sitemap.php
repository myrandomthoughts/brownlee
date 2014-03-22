<?php
/*
Template Name: Sitemap
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
				
				 	<h1><?php the_title(); ?>s</h1>
				    <ul>
					<?php wp_list_pages('title_li='); ?>
					</ul>

				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
