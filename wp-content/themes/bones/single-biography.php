<?php get_header(); ?>

<div class="main">
	
	<?php get_template_part( 'part-main-banner-single' ); ?>

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

			<a href="<?php  ?>"><div class="vcard"></div></a>

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
				<!-- <li><a href="#tab1">Bio</a></li>
				<li><a href="#tab2">Representative Work</a></li>
				<li><a href="#tab3">Memberships</a></li>
				<li><a href="#tab4">Presentations</a></li>
				<li><a href="#tab5">Publications</a></li>
				<li><a href="#tab6">Recognition</a></li>
				 -->
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
		<!-- <div id="tab1" class="tabContent">
			<h1>Biography</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>

		<div id="tab2" class="tabContent">
			<h1>Representative Work</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>

		<div id="tab3" class="tabContent">
			<h1>Memberships</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>

		<div id="tab4" class="tabContent">
			<h1>Presentations</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>

		<div id="tab5" class="tabContent">
			<h1>Publications</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>


		<div id="tab6" class="tabContent">
			<h1>Recognition</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
			As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div> -->
</div>

		<input class="profile-button" type="button" name="viewall" value="View All">
	</div>
</div><!--end of Main-->

<?php get_footer(); ?>

<!-- 
<?php
				$field_name = "bio";
				$field = get_field_object($field_name);
				 
				echo "<li>" . $field['label'] . ': ' . "<div>" . $field['value'] . "</div></li>";



				$field_name = "representative_work";
				$field = get_field_object($field_name);
				 
				echo "<li>" . $field['label'] . ': ' . "<div>" . $field['value'] . "</div></li>";

				$field_name = "memberships";
				$field = get_field_object($field_name);
				 
				echo "<li>" . $field['label'] . ': ' . "<div>" . $field['value'] . "</div></li>";

				$field_name = "presentations";
				$field = get_field_object($field_name);
				 
				echo "<li>" . $field['label'] . ': ' . "<div>" . $field['value'] . "</div></li>";

			?>





 -->

