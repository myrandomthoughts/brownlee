<?php
/*
Template Name: Login
*/
?>

<?php get_header(); ?>

			<div class="main">

				<?php get_template_part( 'part-main-banner' ); ?>

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_template_part('bulletin-news-events-muni'); ?>
				</div>

				<div class="ebulletin login">

					<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?> 
				
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
