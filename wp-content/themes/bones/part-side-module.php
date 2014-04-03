<div class="side-module">
	<a href="javascript:window.print()" title="print"><img src="<?php bloginfo('template_directory'); ?>/library/images/print.png" alt="" width="" height="" /></a>

	<a href='#' onclick='overlay()' id="email-modal"><img src="<?php bloginfo('template_directory'); ?>/library/images/email.png" alt="" width="" height="" /></a>

	<?php
	$url = get_permalink();
	?>

	<a href="http://pdfmyurl.com?url=<?php print urlencode($url); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/pdf.png" alt="" width="" height="" /></a>
</div>
