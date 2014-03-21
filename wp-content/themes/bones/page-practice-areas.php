<?php
/*
Template Name: Practice Areas
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php the_field('top_banner'); ?>" alt="Top Banner" width="894" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin'); ?>
				</div>


				<div class="main-content practice-areas">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
					<ul>
					<?php $loop = new WP_Query( array( 'post_type' => 'practice_area_type') );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
				
<!-- 
	<?php
		$args = array(
			'post_type' => 'biography',
			
		);


		$bio = new WP_Query( $args );
		if( $bio->have_posts() ) {
			while( $bio->have_posts() ) {
				$bio->the_post();
				?>
					<h1><?php the_field('name'); ?></h1>
					<h2><?php the_field('practice_areas'); ?></h2>
				<?php
			}
		}
	?> -->
			</div><!--end of main-->

<?php get_footer(); ?>
