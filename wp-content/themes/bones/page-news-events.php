<?php
/*
Template Name: News and Events
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'bulletin-news-events-muni' ); ?> 
				</div>

			<div class="news-events">
				
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
				<div class="news-list">
					<h1>News</h1>
					<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '3') );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<span class="post-time"><?php the_time('F j, Y'); ?></span>
					<div class="news-item">
						<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

						<p><?php the_excerpt(); ?></p>
						<a class="full" href="<?php the_permalink(); ?>">></a>
					</div>

					<?php endwhile; wp_reset_postdata(); ?>
					<a class="full-link" href="<?php bloginfo('url'); ?>/?page_id=91">View News</a>
				</div>

				
				<div class="events-list">
					<h1>Events</h1>
					<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '3') );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<span class="post-time"><?php the_time('F j, Y'); ?></span>
					<div class="events-item">	
						<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

						<p><?php the_excerpt(); ?></p>
						<a class="full" href="<?php the_permalink(); ?>">></a>
					</div>

					<?php endwhile; wp_reset_postdata(); ?>
					<a class="full-link" href="<?php bloginfo('url'); ?>/?page_id=193">View Events</a>
				</div>

			</div><!--end of News and Events-->

<?php get_footer(); ?>