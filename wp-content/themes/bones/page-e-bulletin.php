<?php
/*
Template Name: E-Bulletin
*/
?>

<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />
				
					<div class="title">
						<h1><?php the_title(); ?></h1>
					</div>

					<div class="side-module">
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/print.png" alt="" width="" height="" /></a>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/email.png" alt="" width="" height="" /></a>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/pdf.png" alt="" width="" height="" /></a>
					</div>

				</div><!--end of main banner-->

				<div class="side-panel">
					<?php bones_main_nav(); ?>
					<?php get_sidebar(); ?>
				</div>

				<div class="ebulletin">
					<form action="" method="">
						<h2>Subscribe to our EBulletin</h2>

						<p>Kindly Fill in the form below:</p>

						<div class="input-line">
							<label class="instruct" for="email">Email Address:</label>
							<input id="email" title="Please provide a valid email address" type="text">
						</div>	

						<div>
							<label class="instruct" for="">Select any eBulletin:</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Subscribe to All Bulletins">
							<label>Subscribe to all bulletins</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Minicipal Law">
							<label>Minicipal Law</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Constructive Thinking">
							<label>Constructive Thinking</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Labor Pains">
							<label>Labor Pains</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Good Idea">
							<label>Good Idea</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Strong Defense">
							<label>Strong Defense</label>
						</div>

						<div class="check-wrap">
							<input type="checkbox" name="" id="checkboxes" value="Business Law">
							<label>Business Law</label>
						</div>

						<div class="input-line">
							<label class="instruct" >Enter the code:</label>
							<input id="code" title="" type="text">
						</div>
					</form>

					<button class="submit" name="submit">Submit</button>
					<button class="submit" name="reset">Reset</button>
				</div><!--end of EBulletin-->

			</div><!--end of main-->

<?php get_footer(); ?>
