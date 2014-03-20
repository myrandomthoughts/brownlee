<?php
/*
Template Name: Contact
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
					<?php get_template_part( 'bulletin-news-events-muni' ); ?>

				</div>

			<div class="contacts">
				<div class="contacts-wrap">
					<h2>Edmonton Office</h2>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/contact-ed.png" alt="" width="" height="" />
					<div class="contact-info">
						<?php the_field('edmonton_address'); ?>
						<span><a href="mailto:<?php the_field('edmonton_email'); ?>"><?php the_field('edmonton_email'); ?></a></span></br>
						<span>+<b>Toll Free:</b><?php the_field('muni_edmonton_ph'); ?></span>
					</div>
					<div class="map">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ed-map.png" alt="Edmonton Office Map" width="" height="" />
						<a href="<?php bloginfo('url'); ?>/?page_id=638">View Map</a>
					</div>
				</div><!--end of contact wrap-->

				<div class="contacts-wrap">
					<h2>Calgary Office</h2>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/contact-cal.png" alt="" width="" height="" />
					<div class="contact-info">
						<?php the_field('calgary_address'); ?>
						<span><a href="mailto:<?php the_field('calgary_email'); ?>"><?php the_field('calgary_email'); ?></a></span></br>
						<span>+<b>Toll Free:</b><?php the_field('muni_calgary_ph'); ?></span>
					</div>
					<div class="map">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/cal-map.png" alt="Calgary Office Map" width="196" height="198" />
						<a href="<?php bloginfo('url'); ?>/?page_id=641">View Map</a>
					</div>
				</div><!--end of contact wrap-->

			</div><!--end of contacts-->

<?php get_footer(); ?>