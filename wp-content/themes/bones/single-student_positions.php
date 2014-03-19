<?php get_header(); ?>

<div class="main">
	<div class="main-banner">

		<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />

		<div class="title">
			<h1><?php the_field('name'); ?></h1>
		</div>

		<?php get_template_part( 'part-side-module' ); ?>
		
	</div><!--end of main banner-->
	<div class="side-panel">
		<?php bones_main_nav(); ?>
		<?php get_template_part( 'bulletin-news-events-muni' ); ?>

	</div>
	<div class="main-content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div><!--end of Main-->

<?php get_footer(); ?>
