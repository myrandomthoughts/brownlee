				<div class="main-banner">

					<img class="banner-shadow-other" src="<?php bloginfo('template_directory'); ?>/library/images/banner-shadow.png" alt="" width="936" height="" />

					<img class="top-image" src="<?php the_field('top_banner'); ?>" alt="Top Banner" width="894" height="" />

					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<img class="title-bg" src="<?php bloginfo('template_directory'); ?>/library/images/title-bg.png" alt="" width="" height="" />

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->	