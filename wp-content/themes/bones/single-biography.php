<?php get_header(); ?>

<div class="main">
	
	<div class="main-banner">

		<img class="banner-shadow-other" src="<?php bloginfo('template_directory'); ?>/library/images/banner-shadow.png" alt="" width="936" height="" />

		<?php 
 
		$city = get_field('location');
	 	
		if( $city == "Edmonton" ): ?>

			<img class="top-image top-image-lawyer" src="<?php bloginfo('template_directory'); ?>/library/images/edmonton-banner.png" alt="" width="" height="" />
	 	
	 	<?php else: ?>

	 		<img class="top-image top-image-lawyer" src="<?php bloginfo('template_directory'); ?>/library/images/calgary-banner.png" alt="" width="" height="" />

		<?php endif; ?>

		<div class="title">
			<h1><?php the_title(); ?></h1>
		</div>

		<img class="title-bg" src="<?php bloginfo('template_directory'); ?>/library/images/title-bg.png" alt="" width="" height="" />

		<?php get_template_part( 'part-side-module' ); ?>
		
	</div><!--end of main banner-->

	<div class="side-panel">
		<?php bones_main_nav(); ?>
		<div class="sidebar">
			<h4>Practice Areas</h4>
			<?php 
	 
			$practice_areas = get_field('practice_area_relationship'); ?>
			<ul>
			<?php
			if( $practice_areas ): 
			 	foreach ($practice_areas as $k => $pid) {
			 		print '<li><a href="'. get_page_link($pid) .'">'. get_the_title($pid) .'</a></li>';
			 	}
			 
			 endif; 
			 ?>
			</ul>

			<div class="municipal-contact">
				<h3>Contact our Municipal Helpine:</h3>
				<ul>
					<li><?php print get_field('muni_edmonton_ph', 763); ?> (Edmonton)</li>
					<li><?php print get_field('muni_calgary_ph', 763); ?> (Calgary)</li>
				</ul>
				<em>or directly by e-mail to a member of our <a href="<?php print get_page_link(119); ?>">Municipal Team</a> dedicated to serving municipalities and their related public entities.</em>
			</div>
		</div>

	</div>
	<div class="profile-wrap">
		
		<div class="profile">
			<?php the_post_thumbnail( 'profile-picture', array('class' => 'profile-picture') ); ?>

			<?php if( get_field('linkedin_link') ): ?>

			 <a class="linkedin" href="<?php the_field('linkedin_link'); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin.png" alt="" width="" height="" /> </a>

			<?php endif; ?>

			<?php
			$url = home_url();
			?>
			<a href="<?php print $url; print "/vcards/"; the_field('vcard'); ?>"><div class="vcard"></div></a>

			<dl>
				<dt>Location:</dt><dd><?php the_field('location'); ?></dd>
				<dt>Direct:</dt><dd><?php the_field('direct'); ?></dd>
				<dt>E-mail:</dt><dd><?php the_field('e-mail'); ?></dd>
			</dl>

			<dl>
				<dt>Preparatory Education:</dt><dd><?php the_field('preparatory_education'); ?></dd>
				<dt>Legal Education:</dt><dd><?php the_field('legal_education'); ?></dd>
				<dt>Called to the Bar:</dt><dd><?php the_field('called_to_the_bar'); ?></dd>
			</dl>
		</div>

		<div class="profile-bar">
			<ul class="tabs">
				<?php
					$tab_filed_names = array( 'Bio' => 'bio', 'Representative Work'=>'representative_work', 'Memberships'=>'memberships', 'Presentations'=>'presentations', 'Publications'=>'publications', 'Recognition'=>'recognition', 'Community'=>'community');
					$tabnum = 1;

					foreach ($tab_filed_names as $key => $value) {

						$tabcont = get_field($value);
						if(!empty($tabcont)){
							print '<li><a href="#tab'.$tabnum.'">'.$key.'</a></li>';
							$tabnum++;
						}
					}
				?>
			</ul>
		</div>

<div id="tabContainer">
	<?php
		
		$tabnum = 1;
		$tab_filed_names = array( 'Bio' => 'bio', 'Representative Work'=>'representative_work', 'Memberships'=>'memberships', 'Presentations'=>'presentations', 'Publications'=>'publications', 'Recognition'=>'recognition', 'Community'=>'community');
		foreach ($tab_filed_names as $key => $value) {
			$tabcont = get_field($value);
			
			if(!empty($tabcont)){
				print 	'<div id="tab'. $tabnum .'" class="tabContent">
							<h1>'. $key .'</h1>
							'. $tabcont .'
						</div>';
				$tabnum++;
			}
		}
	?>
		
</div>
	</div>
</div><!--end of Main-->

<?php get_footer(); ?>