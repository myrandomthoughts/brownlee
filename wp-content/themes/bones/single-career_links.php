<?php get_header(); ?>

<div class="main">
	<div class="main-banner">

		<img class="top-image" src="<?php the_field('top_banner'); ?>" alt="Top Banner" width="894" height="" />

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
