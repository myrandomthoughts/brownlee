<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

			<div class="main">

				<div class="main-banner">

					<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/home-banner.png" alt="" width="" height="" />
					<img class="top-image-shadow" src="<?php bloginfo('template_directory'); ?>/library/images/home-banner-bottom.png" alt="" width="" height="" />
					<div class="home-top">


					<?php bones_main_nav(); ?>

						<div class="home-intro">
								<h1><?php the_field( 'opening_heading' ); ?></h1>
							<p><?php the_field( 'opening_paragraph' ); ?></p>
						</div>

					</div><!--end of home top-->
				</div><!--end of main banner-->


				<div class="homepage">
					<div class="locations">

						<div class="office office-ed">
							<h3>Edmonton</h3>
					
 							 <div class="flyout flyout-left">
 							 	<div class="flyout-wrap">
									<h2>Edmonton</h2>
									<a id="map" href="">Map</a>
									<p>
										<span>2200 Commerce Place</span><br>
										<span>10155 - 102 Street</span><br>
										<span>Edmonton, AB T5J 4G8</span><br><br>
										<span>TEL:(780)497-4800</span><br>
										<span>FAX:(780)424-3254</span><br>
										<a href="mailto:contactus@brownleelaw.com">contactus@brownleelaw.com</a><br>
										<a href="">View Full Contact Details</a><br>
									</p>
								</div>
							</div>
						</div><!--end of Edmonton Office-->	
						
						<div class="office office-cal">
							<h3>Calgary</h3>

						<div class="flyout flyout-right">
 							 <div class="flyout-wrap">
								<h2>Calgary</h2>
								<a id="map" href="">Map</a>
								<p>
									<span>7th Floor</span><br>
									<span>396 - 11th Avenue S.W.</span><br>
									<span>Calgary, AB  T2R 0C5</span><br><br>
									<span>TEL:(403) 232-8300</span><br>
									<span>FAX:(403) 232-8408</span><br>
									<a href="mailto:contactus@brownleelaw.com">contactus@brownleelaw.com</a><br>
									<a href="">View Full Contact Details</a><br>
								</p>
							</div>
						</div> <!--end of Calgary Office-->
					</div><!--end of locations-->
					</div>

					<div class="sidebar-entry">
						<h3>News</h3>
						<span>February 26, 2014</span><br>
						<a class="entry-title" href="">Brownlee LLP New Q.C. Appointments</a>
						<p>
							Congratulations to Thomas D. Marriott, Managing Partner and Allen R. Evaniew, Partner of the Edmonton office on their 2013 Queen’s Counsel (Q.C.) appointments.
						</p>
						<a class="full" href="">></a><br>
						<a class="view" href="">View News</a>
					</div><!--end of sidebar entry-->

					<div class="sidebar-entry">
						<h3>News</h3>
						<span>February 26, 2014</span><br>
						<a class="entry-title" href="">Brownlee LLP New Q.C. Appointments</a>
						<p>
							Congratulations to Thomas D. Marriott, Managing Partner and Allen R. Evaniew, Partner of the Edmonton office on their 2013 Queen’s Counsel (Q.C.) appointments.
						</p>
						<a class="full" href="">></a><br>
						<a class="view" href="">View News</a>
					</div><!--end of sidebar entry-->

					<div class="sidebar-entry">
						<h3>News</h3>
						<span>February 26, 2014</span><br>
						<a class="entry-title" href="">Brownlee LLP New Q.C. Appointments</a>
						<p>
							Congratulations to Thomas D. Marriott, Managing Partner and Allen R. Evaniew, Partner of the Edmonton office on their 2013 Queen’s Counsel (Q.C.) appointments.
						</p>
						<a class="full" href="">></a><br>
						<a class="view" href="">View News</a>
					</div><!--end of sidebar entry-->
				</div><!--end of homepage-->

				<?php get_footer(); ?>
