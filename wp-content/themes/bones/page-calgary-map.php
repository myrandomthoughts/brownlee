<?php
/*
Template Name: Calgary Map
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="banner-shadow" src="<?php bloginfo('template_directory'); ?>/library/images/front-banner-shadow.png" alt="" width="" height="" />

					<img class="top-image" src="<?php the_field('top_banner'); ?>" alt="Top Banner" width="894" height="" />
					
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<img class="title-bg" src="<?php bloginfo('template_directory'); ?>/library/images/title-bg.png" alt="" width="" height="" />
					
					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'news-events' ); ?>
				</div>

				<div class="main-content">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 

					<h1>Calgary Map</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2508.566743389526!2d-114.0713517!3d51.0426223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371701d5fab8147%3A0x4d87342be0e6b2ab!2s396+11+Ave+SW!5e0!3m2!1sen!2sca!4v1395189540125" width="600" height="600" frameborder="0" style="border:0"></iframe>
				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
