<?php get_header(); ?>

<div class="main">
	<div class="main-banner">

		<img class="top-image" src="<?php bloginfo('template_directory'); ?>/library/images/about-us-banner.png" alt="" width="" height="" />

		<div class="title">
			<h1><?php the_field('name'); ?></h1>
		</div>

		<div class="side-module">
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/print.png" alt="" width="" height="" /></a>
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/email.png" alt="" width="" height="" /></a>
				<a href=""><img src="<?php bloginfo('template_directory'); ?>/library/images/pdf.png" alt="" width="" height="" /></a>
		</div>
	</div><!--end of main banner-->
	<div class="side-panel">
		<?php bones_main_nav(); ?>
		<h2>Practice Areas</h2>

		<?php the_field('practice_areas'); ?>
		<?php 
 
		$term = get_field('practice_areas');
		 
		if( $term ): ?>
		 
			<h2><?php echo $term ?></h2>
			<p><?php echo $term->name; ?></p>
		 
		<?php endif; ?>


	</div>
	<div class="profile-wrap">
		<div class="profile">
			<?php the_post_thumbnail( 'profile-picture', array('class' => 'profile-picture') ); ?>

			<?php if( get_field('linkedin_link') ): ?>

			 <a class="linkedin" href="<?php the_field('linkedin_link'); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin.png" alt="" width="" height="" /> </a>

			<?php endif; ?>


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
			<ul>
				<a href=""><li>Bio</li></a>
				<a href=""><li>Representative Work</li></a>
				<a href=""><li>Memberships</li></a>
				<a href=""><li>Presentations</li></a>
				<a href=""><li>Publications</li></a>
				<a href=""><li>Recognition</li></a>
				<a href=""><li>Community</li></a>
			</ul>
		</div>
		<div class="profile-info">
			<h1>Biography</h1>
			<p>Having spent several years of his practice conducting commercial and insurance litigation, Sean has a wealth of experience in addressing commercial disputes. He has provided his clients with advice and guidance on commercial transactions, mortgage financing, and leasing matters. Though focused on real estate, Sean’s experience extends to all manner of commercial transactions, including asset purchases and sales, property development and non-real estate backed security.
As part of his core practice, Sean typically represents banks and other lenders in the assessment and placement of security.  Sean also frequently represents borrowers to assist with their financing needs, particularly during the acquisition or development of property.</p>
		</div>
		<input class="profile-button" type="button" name="viewall" value="View All">
	</div>
</div><!--end of Main-->

<?php get_footer(); ?>
