<?php
/*
Template Name: Subscribe
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part( 'bulletin-news-events-muni' ); ?>

				</div>

				<div class="ebulletin">
					
					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

					<h2>Subscribe to our EBulletin</h2>
					<?php echo do_shortcode( '[cfdb-save-form-post]' ); ?>
					<?php gravity_form(1, false, false, false, '', false); ?>
					
				</div><!--end of EBulletin-->

			</div><!--end of main-->

<?php get_footer(); ?>
