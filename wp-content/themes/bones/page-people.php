<?php
/*
Template Name: People
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

				<div class="people">
					<h1><?php the_field('title'); ?></h1>
					<p><?php the_field('generic_content'); ?></p>
					<a class="link" href="">View</a>

					<div class="admin">
						<h3>Jennifer Bell, CHRP</h3>

						<address>
							<em>HR Administrator, Edmonton</em>
							<span>2200 Commerce Place</span>
							<span>10155 - 102 Street</span>
							<span>Edmonton, AB T5J 4G8</span>
						</address>

						<a href="mailto:">jbell@brownleelaw.com</a>
					</div>

					<div class="admin">
						<h3>Jennifer Bell, CHRP</h3>

						<address>
							<em>HR Administrator, Edmonton</em>
							<span>2200 Commerce Place</span>
							<span>10155 - 102 Street</span>
							<span>Edmonton, AB T5J 4G8</span>
						</address>

						<a href="mailto:">jbell@brownleelaw.com</a>
					</div>

					<div class="admin">
						<h3>Jennifer Bell, CHRP</h3>

						<address>
							<em>HR Administrator, Edmonton</em>
							<span>2200 Commerce Place</span>
							<span>10155 - 102 Street</span>
							<span>Edmonton, AB T5J 4G8</span>
						</address>

						<a href="mailto:">jbell@brownleelaw.com</a>
					</div>

				</div><!--end of people-->

			</div><!--end of main-->

<?php get_footer(); ?>
