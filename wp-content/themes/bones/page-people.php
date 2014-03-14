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
					<?php get_template_part('bulletin'); ?>
				</div>

				<div class="main-content">
					<?php if( have_rows('new_paragraph') ):
					 
					    while ( have_rows('new_paragraph') ) : the_row(); ?>

					        <h1><?php the_sub_field('new_title'); ?></h1>
					        <p><?php the_sub_field('new_content'); ?></p>
					        <a class="link" href="">View</a>

					 <?php endwhile;
					 
					else :

					endif; ?>
				</div>


				<div class="people">
					<h1>Administration</h1>
					<?php if( have_rows('administration') ):
					 
					    while ( have_rows('administration') ) : the_row(); ?>

					    <div class="admin">
					        <h3><?php the_sub_field('admin_name'); ?></h3>
					        <em><?php the_sub_field('admin_position'); ?></em>
					        <address><span><?php the_sub_field('admin_address'); ?></span></address>
					        <a href="mailto:"><?php the_sub_field('admin_email'); ?></a>
					    </div>
					 <?php endwhile;
					 
					else :

					endif; ?>

				</div><!--end of people-->

			</div><!--end of main-->

<?php get_footer(); ?>
