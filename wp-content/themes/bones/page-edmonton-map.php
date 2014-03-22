<?php
/*
Template Name: Edmonton Map
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'news-events' ); ?>
				</div>

				<div class="main-content">

					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
					<h1>Edmonton Map</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2370.881477317133!2d-113.4955792!3d53.54203044999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a022461805b66d%3A0x39b9ff401f7b3fd0!2s10155+102+St+NW!5e0!3m2!1sen!2sca!4v1395189441696" width="600" height="600" frameborder="0" style="border:0"></iframe>
				</div>
			</div><!--end of main-->

<?php get_footer(); ?>
