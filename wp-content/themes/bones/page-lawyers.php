<?php
/*
Template Name: Lawyers
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

			<div class="all-lawyers">

				<?php $loop = new WP_Query( array( 'post_type' => 'biography') );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="single-lawyer">
					<?php the_post_thumbnail( 'thumbnail' ); ?>

					<div class="lawyer-name">
						<?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>

			</div><!--end of all lawyers-->

<?php get_footer(); ?>