	<div class="main-banner">

		<img class="banner-shadow-other" src="<?php bloginfo('template_directory'); ?>/library/images/banner-shadow.png" alt="" width="936" height="" />

		<?php 
 
		$image = get_field('single_banner');
	 
		if( empty($image) ): ?>

			<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/banner-1.png" alt="" width="" height="" />
	 	
	 	<?php else: ?>

	 		<img class="top-image" src="<?php the_field('single_banner'); ?>" alt="Top Banner" width="894" height="" />

		<?php endif; ?>

		<div class="title">
			<h1><?php the_title(); ?></h1>
		</div>

		<img class="title-bg" src="<?php bloginfo('template_directory'); ?>/library/images/title-bg.png" alt="" width="" height="" />

		<?php get_template_part( 'part-side-module' ); ?>
		
	</div><!--end of main banner-->