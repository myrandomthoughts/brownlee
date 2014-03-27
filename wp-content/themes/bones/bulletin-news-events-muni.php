<div class="sidebar">
	<h4>E-Bulletins</h4>
	<p>Keep current on issues and developments in your industry with our E-Bulletins.</p>
	<a class="full" href="<?php print get_page_link(528); ?>">Sign Up here</a>

	<div class="news-list">
		<h4>News</h4>
		<?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => '1', 'order' => 'DESC', 'orderby' => 'date') );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<span class="post-time"><?php the_time('F j, Y'); ?></span>
		<div class="news-item">
			<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

			<p><?php the_excerpt(); ?></p>
			<a class="full" href="<?php the_permalink(); ?>">></a>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
		<a class="full-link" href="<?php print get_page_link(91); ?>">View News</a>
	</div>

	
	<div class="events-list">
		<h4>Events</h4>
		<?php $loop = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => '1', 'order' => 'DESC', 'orderby' => 'date') );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<span class="post-time"><?php the_time('F j, Y'); ?></span>
		<div class="events-item">	
			<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'ne_title' ); ?></h3></a>

			<p><?php the_excerpt(); ?></p>
			<a class="full" href="<?php the_permalink(); ?>">></a>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
		<a class="full-link" href="<?php print get_page_link(193); ?>">View Events</a>
	</div>

	<div class="municipal-contact">
		<h3>Contact our Municipal Helpine:</h3>
		<ul>
			<li><?php print get_field('muni_edmonton_ph', 763) ?> (Edmonton)</li>
			<li><?php print get_field('muni_calgary_ph', 763) ?> (Calgary)</li>
		</ul>
		<em>or directly by e-mail to a member of our <a href="<?php print get_page_link(119); ?>">Municipal Team</a> dedicated to serving municipalities and their related public entities.</em>
	</div>
</div><!--end of sidebar-->