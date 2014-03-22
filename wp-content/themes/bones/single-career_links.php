<?php get_header(); ?>

<div class="main">

	<?php get_template_part( 'part-main-banner-single' ); ?>


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
