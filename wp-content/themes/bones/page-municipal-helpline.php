<?php
/*
Template Name: Municipal Helpline
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
					<?php get_template_part( 'news-events-muni' ); ?>

				</div>

				<div class="municipal">

					<?php if( have_rows('new_paragraph') ):
				 
				    while ( have_rows('new_paragraph') ) : the_row(); ?>

				        <h1><?php the_sub_field('new_title'); ?></h1>
				        <p><?php the_sub_field('new_content'); ?></p>

					 <?php endwhile;
					 
					else :

					endif; ?>

					<div class="municipal-contact">
						<h3>Contact our Municipal Helpine:</h3>
						<ul>
							<li>1-800-661-9069 (Edmonton)</li>
							<li>1-877-232-8303 (Calgary)</li>
						</ul>
						<em>or directly by e-mail to a member of our <a href="">Municipal Team</a> dedicated to serving municipalities and their related public entities.</em>
					</div>
				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
