<?php
/*
Template Name: Students
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin-news-events-muni'); ?>
				</div>


				<div class="student-wrap">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>

					<?php endwhile; ?>
					<?php endif; ?>

					<?php
					 
					// check if the repeater field has rows of data
					if( have_rows('students') ):
					 
					 	// loop through the rows of data
					    while ( have_rows('students') ) : the_row();
					 
					        // display a sub field value ?>

							<div class="student">

								<img src="<?php the_sub_field('student_picture'); ?>" alt="Student Profile Picture" width="155" height="109" />

								<div class="col1">
									<h3><?php the_sub_field('student_name'); ?></h3>
									<em><?php the_sub_field('student_title'); ?></em>
									<span>Phone: <?php the_sub_field('student_phone_number'); ?></span>
									<a href="mailto:<?php the_sub_field('student_email'); ?>"><?php the_sub_field('student_email'); ?></a>
									<a href="<?php the_sub_field('student_linkedin'); ?>">Linkedin</a>
								</div>

								<div class="col2">
									<span><?php the_sub_field('student_education'); ?></span>
								</div>
							</div><!--end of student-->

							<?php
					    endwhile;
					 
					else :
					 
					    // no rows found
					 
					endif;
					 
					?>

				</div><!--end of student wrap-->

			</div><!--end of main-->

<?php get_footer(); ?>
