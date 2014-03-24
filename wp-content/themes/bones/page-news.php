<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

			<div class="main" id="main">

				<?php get_template_part( 'part-main-banner' ); ?>	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin'); ?>
				</div>

				

				<div class="nee-wrap">
					<?php the_field('text_entry'); ?>

					<div class="nee-list">
						
						<?php 
						$paged = get_query_var('paged');
						$loop = new WP_Query( array( 'post_type' => 'news', 'order' => 'DESC', 'post_status'=>'publish', 'paged' => $paged,'posts_per_page' => 5) );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="nee-item">
							<a href="<?php the_permalink(); ?>"><h2><?php the_field( 'ne_title' ); ?></h2></a>

							<p><?php the_excerpt(); ?></p>
							<a class="full" href="<?php the_permalink(); ?>">Read More...</a>
						</div>

						<?php endwhile;  wp_pagenavi(array('query' => $loop));  wp_reset_postdata(); ?>
						
					</div>

					<a id="top" href="#main">Back to top</a>
				</div><!--end of News-->

<?php get_footer(); ?>