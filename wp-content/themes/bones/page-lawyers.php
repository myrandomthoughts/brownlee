<?php
/*
Template Name: Lawyers
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'bulletin-news-events-muni' ); ?>
				</div>

			<div class="all-lawyers">
				
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
				<?php $loop = new WP_Query( 
											array( 	'post_type' => 'biography',
													'order' 	=> 'ASC',
												   	'orderby'   => 'meta_value', 
												   	'meta_key' 	=> 'name'
												) 
										);
				
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="single-lawyer">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>

					<div class="lawyer-name">
						<?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>

			</div><!--end of all lawyers-->

<?php get_footer(); ?>