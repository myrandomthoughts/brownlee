<?php
/*
Template Name: News and Events
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<div class="side-module">
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/print.png" alt="" width="" height="" /></a>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/email.png" alt="" width="" height="" /></a>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/pdf.png" alt="" width="" height="" /></a>
					</div>

				</div><!--end of main banner-->	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_sidebar(); ?>
				</div>

			<div class="news-events">
				<div class="news-list">

					<?php $loop = new WP_Query( array( 'post_type' => 'news') );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<a href="<?php get_permalink() ?>"><h2><?php the_field( 'ne_title' ); ?></h2></a>

						<p><?php the_excerpt(); ?></p>
					
					<?php endwhile; wp_reset_postdata(); ?>
					
				</div>

				<div class="events-list">

					<?php $loop = new WP_Query( array( 'post_type' => 'events') );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<a href="<?php get_permalink() ?>"><h2><?php the_field( 'ne_title' ); ?></h2></a>

						<p><?php the_excerpt(); ?></p>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>

			</div><!--end of News and Events-->

<?php get_footer(); ?>