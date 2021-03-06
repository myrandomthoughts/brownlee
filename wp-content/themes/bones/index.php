<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>


<div class="main">

	<div class="main-banner">

		<img class="banner-shadow" src="<?php bloginfo('template_directory'); ?>/library/images/front-banner-shadow.png" alt="" width="" height="" />

		<div id="top-image">
			<div class="banner-shadow"><img src="<?php bloginfo('template_directory'); ?>/library/images/front-banner-shadow.png"></div>
			
			<div class="slider1">
				<?php if( have_rows('carousel') ):
				 while ( have_rows('carousel') ) : the_row(); ?>
		  		<div class="slide">
		  			  <h1></h1>
		  			<img src="<?php the_sub_field('carousel_image'); ?>">
		  			<a href="<?php the_sub_field('carousel_link'); ?>"><?php the_sub_field('carousel_text'); ?></a>
		  		</div>
		  		 <?php endwhile;
				endif; ?>
			</div>
		</div>



		<img class="top-image-shadow" src="<?php bloginfo('template_directory'); ?>/library/images/home-banner-bottom.png" alt="" width="" height="" />
		

		<div class="home-top">

			<?php bones_main_nav(); ?>

			<div class="home-intro">
				<h1><?php the_field( 'opening_heading' ); ?></h1>
				<p><?php the_field( 'opening_paragraph' ); ?></p>
			</div>

		</div><!--end of home top-->
	</div><!--end of main banner-->


	<div class="homepage">
		<div class="locations">

			<div class="office office-ed">		
				 <div class="flyout flyout-left">

				 	<div class="flyout-wrap">

				 		<div class="flyout-arrow"></div>
						<h2>Edmonton</h2>
								<?php the_field('edmonton_address'); ?>
								<a href="mailto:<?php the_field('edmonton_email'); ?>"><?php the_field('edmonton_email'); ?></a><br>
							
					</div>
					<a id="map" href="<?php print get_page_link(638); ?>">Map</a>
					<a href="<?php print get_page_link(119); ?>" class="full-contact">View Full Contact Details</a><br>
				</div>
			</div><!--end of Edmonton Office-->	
			
			<div class="office office-cal">

			<div class="flyout flyout-right">
				 <div class="flyout-wrap">
				 	<div class="flyout-arrow"></div>
					<h2>Calgary</h2>

						<?php the_field('calgary_address'); ?>
						<a href="mailto:<?php the_field('calgary_email'); ?>"><?php the_field('calgary_email'); ?></a>

				</div>
					<a id="map" href="<?php print get_page_link(641); ?>">Map</a>
					<a href="<?php print get_page_link(119); ?>" class="full-contact">View Full Contact Details</a><br>
			</div> <!--end of Calgary Office-->
		</div><!--end of locations-->
		</div>

		<div class="sidebar-entry">
			<h3>News</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '1', 'order' 	=> 'DESC', 'orderby' => 'date') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">
				<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>

				<p><?php the_excerpt(); ?></p>
				<a class="full-front" href="<?php the_permalink(); ?>">></a>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php print get_page_link(91); ?>">View News</a>
		</div><!--end of sidebar entry-->


		<div class="sidebar-entry">
			<h3>Events</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '1', 'order' => 'DESC', 'orderby' => 'date') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">	
				<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>

				<p><?php the_excerpt(); ?></p>
				<a class="full-front" href="<?php the_permalink(); ?>">></a>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php print get_page_link(193); ?>">View Events</a>
		</div><!--end of sidebar entry-->


		<div class="sidebar-entry">
			<h3>E-Bulletins</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'e-bulletin', 'posts_per_page' => '1', 'order' => 'DESC', 'orderby' => 'date') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">	
				<div class="text-wrap">
					<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>
					
					<p><?php the_excerpt(); ?></p>
					<a class="full-front" href="<?php the_permalink(); ?>">></a>
				</div>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php print get_page_link(117); ?>">View E-Bulletins</a>
		</div><!--end of sidebar entry-->
	</div><!--end of homepage-->

	<?php get_footer(); ?>
