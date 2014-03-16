<?php
/*
Template Name: Careers--Students
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
					<?php get_template_part( 'bulletin-news-events-muni' ); ?>

				</div>

			<div class="main-content">
				<h1><?php the_field('top_title'); ?></h1>
				<?php the_field('top_paragraph'); ?>
				<ul>
				<?php $loop = new WP_Query( array( 'post_type' => 'career_links',
												   'order'     => 'asc') );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				
					<li><?php the_title('<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>'); ?></li>
				
				<?php endwhile; wp_reset_postdata(); ?>
				</ul>

				<h2><?php the_field('text_entry'); ?></h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'student_positions',
												   'order'     => 'asc') );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				
					<h1><?php the_title('<a class="jtitle" href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>'); ?></h1>
					
					<?php the_excerpt(); ?>

					<?php $link = get_permalink(); ?>
					<a class="full" href="<?php echo $link ?>">Read More...</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div><!--end of main content-->

<?php get_footer(); ?>