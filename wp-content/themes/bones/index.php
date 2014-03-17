<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>


<div class="main">

	<div class="main-banner">

		<div id="top-image">
			<div class="slider1">
		  		<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-banner.png"></div>
		  		<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-banner.png"></div>
		  		<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-banner.png"></div>
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
				<h3>Edmonton</h3>
		
					 <div class="flyout flyout-left">

					 	<div class="flyout-wrap">
					 		<div class="flyout-arrow"></div>
						<h2>Edmonton</h2>
						<a id="map" href="">Map</a>
						<p>
							<span>2200 Commerce Place</span><br>
							<span>10155 - 102 Street</span><br>
							<span>Edmonton, AB T5J 4G8</span><br><br>
							<span>TEL:(780)497-4800</span><br>
							<span>FAX:(780)424-3254</span><br>
							<a href="mailto:contactus@brownleelaw.com">contactus@brownleelaw.com</a><br>
							<a href="">View Full Contact Details</a><br>
						</p>
					</div>
				</div>
			</div><!--end of Edmonton Office-->	
			
			<div class="office office-cal">
				<h3>Calgary</h3>

			<div class="flyout flyout-right">
					 <div class="flyout-wrap">
					 	<div class="flyout-arrow"></div>
					<h2>Calgary</h2>
					<a id="map" href="">Map</a>
					<p>
						<span>7th Floor</span><br>
						<span>396 - 11th Avenue S.W.</span><br>
						<span>Calgary, AB  T2R 0C5</span><br><br>
						<span>TEL:(403) 232-8300</span><br>
						<span>FAX:(403) 232-8408</span><br>
						<a href="mailto:contactus@brownleelaw.com">contactus@brownleelaw.com</a><br>
						<a href="">View Full Contact Details</a><br>
					</p>
				</div>
			</div> <!--end of Calgary Office-->
		</div><!--end of locations-->
		</div>

		<div class="sidebar-entry">
			<h3>News</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '1') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">
				<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>

				<p><?php the_excerpt(); ?></p>
				<a class="full-front" href="<?php the_permalink(); ?>">></a>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php bloginfo('url'); ?>/?page_id=91">View News</a>
		</div><!--end of sidebar entry-->


		<div class="sidebar-entry">
			<h3>Events</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '1') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">	
				<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>

				<p><?php the_excerpt(); ?></p>
				<a class="full-front" href="<?php the_permalink(); ?>">></a>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php bloginfo('url'); ?>/?page_id=193">View Events</a>
		</div><!--end of sidebar entry-->


		<div class="sidebar-entry">
			<h3>E-Bulletins</h3>
			<?php $loop = new WP_Query( array( 'post_type' => 'e-bulletin', 'posts_per_page' => '1') );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<span class="post-time"><?php the_time('F j, Y'); ?></span>
			<div class="news-item">	
				<div class="text-wrap">
					<a href="<?php the_permalink(); ?>"><?php the_field( 'ne_title' ); ?></a>
					<?php the_field( 'ne_content' ); ?>
					<p><?php the_excerpt(); ?></p>
					<a class="full-front" href="<?php the_permalink(); ?>">></a>
				</div>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>
			<a class="view" href="<?php bloginfo('url'); ?>/?page_id=193">View Events</a>
		</div><!--end of sidebar entry-->
	</div><!--end of homepage-->

	<?php get_footer(); ?>
