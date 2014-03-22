<?php
/*
Template Name: Practice Areas
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin'); ?>
				</div>


				<div class="main-content practice-areas">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
					<ul>
					<?php $loop = new WP_Query( array( 'post_type' => 'practice_area_type', 'order' => 'ASC', 'orderby' => 'title') );
					
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
