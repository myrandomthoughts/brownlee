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
