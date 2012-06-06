<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="content-language" content="<?php print $language->language ?>" />
	<?php print $meta; ?>
	<?php print $head; ?>
	<?php print $styles; ?>
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="<?php print $base_path . $bp_library_path; ?>css/ie.css" type="text/css" media="screen, projection">
		<link href="<?php print $path_parent; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
		<?php $styles_ie_rtl['ie']; ?>
	<![endif]-->
	<!--[if lte IE 6]>
		<link href="<?php print $path_parent; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
		<?php $styles_ie_rtl['ie6']; ?>
	<![endif]-->
</head>
<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">

<?php include('header.inc'); ?>

<div id="main" class="container">
	<div class="row">
		<div class="span12">
			<?php
				if ($messages): print '<div class="alert">'. $messages .'</div>'; endif;
				print $help; // Drupal already wraps this one in a class
			?>
		</div>
	</div>

	<div class="row">
		<div id="page_content" class="span12">
			<h1 id="page_title"><?php print $title; ?></h1>
			<?php print $content; ?>
		</div>
		<div id="left_upper" class="span7">
			<?php print $left; ?>
		</div>
		<div id="right_upper" class="span5">
			<?php print $right; ?>
		</div>
	</div>

	<div class="row">
		<div id="full_width" class="span12">
			<?php print $full_width; ?>
		</div>
	</div>

	<div class="row">
		<div id="left_lower" class="span6">
			<?php print $left_lower; ?>
		</div>
		<div id="right_lower" class="span6">
			<?php print $right_lower; ?>
		</div>
	</div>

	<?php print $scripts ?>
	<?php print $closure; ?>
</div> <!-- /main -->

<?php include("footer.inc"); ?>
</body>
</html>
