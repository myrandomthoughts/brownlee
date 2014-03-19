<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

			<div class="main" id="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin'); ?>
				</div>

				

				<div class="nee-wrap">
					<?php the_field('text_entry'); ?>
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  


					<div class="nee-list">
						<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '6') );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="nee-item">
							<a href="<?php the_permalink(); ?>"><h2><?php the_field( 'ne_title' ); ?></h2></a>

							<p><?php the_excerpt(); ?></p>
							<a class="full" href="<?php the_permalink(); ?>">Read More...</a>
						</div>

						<?php endwhile; wp_reset_postdata(); ?>
					</div>
					
					<a id="top" href="#main">Back to top</a>
				</div><!--end of News-->

<?php get_footer(); ?>