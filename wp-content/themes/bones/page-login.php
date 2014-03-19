<?php
/*
Template Name: Login
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php get_template_part( 'part-side-module' ); ?>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin-news-events-muni'); ?>
				</div>

				<div class="ebulletin login">
					<form action="" method="">
						<h2>Brownlee LLP Client Portal</h2>

						<p>KBrownlee LLP makes certain documents available to specific clients through this private client portal. If you do not have login credentials, please contact the Brownlee LLP lawyer managing your account.	
</p>

						<div class="input-line">
							<label class="instruct" for="email">Username:</label>
							<input id="username" title="" type="text">
						</div>	

						<div class="input-line">
							<label class="instruct" for="email">Password:</label>
							<input id="password" title="" type="text">
						</div>	
					</form>

					<button class="submit" name="submit">Go</button>
				</div><!--end of Login-->
			</div><!--end of main-->

<?php get_footer(); ?>
