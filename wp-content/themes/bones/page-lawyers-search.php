<?php
/*
Template Name: Lawyers Search
*/
?>

<?php get_header(); 

	$args = array( 	'post_type' => 'biography',
					'order' 	=> 'ASC',
				   	'orderby'   => 'meta_value', 
				   	'meta_key' 	=> 'name',
				   	'meta_query' => array()
				) ;

	if(isset($_GET['lawyer']) && !empty($_GET['lawyer'])){
		$args['meta_query'][] =
								array(
									'key' => 'name', // name of custom field
									'value' =>  $_GET['lawyer'], // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								);
	}
	if(isset($_GET['location']) && !empty($_GET['location'])){
		$args['meta_query'][] =
								array(
									'key' => 'location', // name of custom field
									'value' => $_GET['location'], // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								);
	}
	if(isset($_GET['pa']) && !empty($_GET['pa'])){
		
		$args['meta_query'][] =
								array(
									'key' => 'practice_area_relationship', // name of custom field
									'value' => $_GET['pa'] , // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								);
	}

	if(count($args['meta_query']) > 1 && !isset($args['meta_query']['relation'])){
		//if they want it to need only one match switch to OR
		$args['meta_query']['relation'] = 'AND';
	}
?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>	

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'bulletin-news-events-muni' ); ?>
				</div>

			<div class="all-lawyers">
				<h1>Search Results</h1>
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
				<?php $loop = new WP_Query($args);
				
				while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="single-lawyer">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>

					<div class="lawyer-name">
						<?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>

			</div><!--end of all lawyers-->

<?php get_footer(); ?>