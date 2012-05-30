<?php
	if ($tabs): print '<div class="admin_menu">'. $tabs .'</div>'; endif;
	if ($breadcrumb): print $breadcrumb; endif;
	if ($messages): print '<div id="alert">'. $messages .'</div>'; endif;
	print $help;
?>