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

			<div class="contacts">
				<div class="contacts-wrap">
					<h2>Edmonton Office</h2>
					<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/contact-ed.png" alt="" width="" height="" /></a>
					<div class="contact-info">
						<span>2200 Commerce Place</span>
						<span>10155 - 102 Street</span>
						<span>Edmonton, AB T5J 4G8</span>
						<span>TEL: (780) 497-4800</span>
						<span>FAX: (780) 424-3254</span>
						<span><a href="mailto:">contactus@brownleelaw.com</a></span>
						<span>+<b>Toll Free:</b>1-800-661-9069</span>
					</div>
					<div class="map">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ed-map.png" alt="Edmonton Office Map" width="" height="" />
						<a href="">View Map</a>
					</div>
				</div><!--end of contact wrap-->

				<div class="contacts-wrap">
					<h2>Calgary Office</h2>
					<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/contact-cal.png" alt="" width="" height="" /></a>
					<div class="contact-info">
						<span>7th Floor, 396 - 11th Avenue S.W.</span>
						<span>Calgary, AB  T2R 0C5</span>
						<span>Edmonton, AB T5J 4G8</span>
						<span>TEL: (403) 232-8300</span>
						<span>FAX: (403) 232-8408</span>
						<span><a href="mailto:">contactus@brownleelaw.com</a></span>
						<span>+<b>Toll Free:</b> 1-877-232-8303</span>
					</div>
					<div class="map">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/cal-map.png" alt="Calgary Office Map" width="196" height="198" />
						<a href="">View Map</a>
					</div>
				</div><!--end of contact wrap-->

			</div><!--end of contacts-->

<?php get_footer(); ?>