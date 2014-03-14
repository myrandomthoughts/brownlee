<?php
/*
Template Name: Practice Areas
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

				<div class="main-content practice-areas">
					<ul>
						<li><a href="">Practice Area</a></li>
						<li><a href="">Practice Area</a></li>
						<li><a href="">Practice Area</a></li>
						<li><a href="">Practice Area</a></li>					
						<li><a href="">Practice Area</a></li>
						<li><a href="">Practice Area</a></li>					
						<li><a href="">Practice Area</a></li>
						<li><a href="">Practice Area</a></li>
					</ul>
				</div>


<!-- <?php
		$args = array(
			'post_type' => 'biography',
			'taxonomy' => 'Education'
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
