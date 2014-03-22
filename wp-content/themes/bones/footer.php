			<footer role="contentinfo">

				<div class="lawyer-search">
					<h4>Lawyer Search</h4>

					<form action="" method="">
						<div class="input-group">
							<p>Select a lawyer:</p>
							<select class="search-input" name="lawyer">
								<option value=""></option>

							</select>
						</div>
						<span>or</span>
						<div class="input-group">
						<p>Name:</p>
							<input class="search-input no-arrow" type="text" name="">
							</input>
						</div>

						<div class="input-group">
							<p>Location:</p>
							<select class="search-input" name="location">
								<option value="">All</option>
								<option value="">Edmonton</option>
								<option value="">Calgary</option>
							</select>
						</div>

						<div class="input-group">
							<p>Practice:</p>
							<select class="search-input" name="practice">
								<option value="">All</option>
								<option value="">Aboriginal</option>
								<option value="">Administrative Law</option>
							</select>
							<input class="search-button" type="submit" value="Go">
						</div>			

					</form>
				</div><!--end of lawyer search-->


				<div class="site-map">

					<div class="sm-left">
						<a href="http://www.linkedin.com/company/brownlee-llp"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-s.png" alt="" width="" height="" /></a>
						<p>Site Design : <a href="http://www.skunkworks.ca/">Skunkworks Creative Group</a></p>
					</div>

					<div class="sm-right">
						<ul class="sm-top-nav">
							<li>Copyright &copy; 2014 Brownlee LLP</li>
							<li><a href="home_url();">Home</a></li>
							<li><a href="<?php print get_page_link(119); ?>">Contact</a></li>
							<li><a href="<?php print get_page_link(136); ?>">Login</a></li>
							<li><a href="<?php print get_page_link(200); ?>">Payment</a></li>
							<li><a href="<?php print get_page_link(203); ?>">Privacy Policy</a></li>
							<li><a href="<?php print get_page_link(207); ?>">Terms Of Use</a></li>
							<li><a href="<?php print get_page_link(524); ?>">Site Map</a></li>
						</ul>

						<div class="sm-column">
							<h4>About Us</h4>
							<ul>
								<li><a href="<?php print get_page_link(11); ?>">Firm Profile</a></li>
								<li><a href="<<?php print get_page_link(25); ?>">Community Involvement</a></li>
								<li><a href="<?php print get_page_link(29); ?>">History</a></li>
								<li><a href="<?php print get_page_link(81); ?>">Practice Areas</a></li>
								<li><a href="<?php print get_page_link(31); ?>">Municipal Helpline</a></li>
							</ul>
						</div>

						<div class="sm-column">
							<h4>People</h4>
							<ul>
								<li><a href="<?php print get_page_link(48); ?>">Lawyers</a></li>
								<li><a href="<?php print get_page_link(111); ?>">Students</a></li>
								<li><a href="<?php print get_page_link(46); ?>">Administration</a></li>
							</ul>
						</div>

						<div class="sm-column">
							<h4>News &amp; Events</h4>
							<ul>
								<li><a href="<?php print get_page_link(91); ?>">News</a></li>
								<li><a href="<?php print get_page_link(193); ?>">Events &amp; Seminars</a></li>
							</ul>
						</div>

						<div class="sm-column">
							<h4>Resources</h4>
							<ul>
								<li><a href="<?php print get_page_link(117); ?>">E-Bulletin</a></li>
								<li><a href="<?php print get_page_link(214); ?>">Articles &amp; Publications</a></li>
								<li><a href="<?php print get_page_link(217); ?>">Links</a></li>
							</ul>
						</div>

						<div class="sm-column">
							<h4>Careers</h4>
							<ul>
								<li><a href="<?php print get_page_link(235); ?>">Students</a></li>
								<li><a href="<?php print get_page_link(276); ?>">Lawyers</a></li>
								<li><a href="<?php print get_page_link(279); ?>">Staff</a></li>
							</ul>
						</div>
					</div>
				</div><!--end of sitemap-->

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
