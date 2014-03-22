<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner-single' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin-news-events-muni'); ?>
				</div>

				<div class="single-wrap main-content">
				
					<h2><?php the_field( 'ne_title' ); ?></h2>
					<span><?php the_field( 'ne_content' ); ?></span>
				</div>
			</div><!--end of single-->

<?php get_footer(); ?>
