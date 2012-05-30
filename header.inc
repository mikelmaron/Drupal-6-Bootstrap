<div id="header_wrapper">
	<div id="header" class="container">
		<div class="row">
			<div class="span8">
			<?php if ($site_name): ?>
			<h1 id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
			<?php endif; ?>
			</div>
			<?php if ($site_slogan): ?>
			<p id="slogan"><a href="/"><?php print $site_name; ?>: <?php print $site_slogan; ?></a></p>
			<?php endif; ?>

			<div class="span4">
				<div id="header_right_top">
					<?php print $header_right_top; ?>
				</div>
				<div id="header_right_bottom">
					<?php print $header_right_bottom; ?>
				</div>
			</div>

			<?php print $header; ?>
		</div>
	</div> <!-- /header -->
</div> <!-- /header_wrapper -->

<div id="primary-menu">
	<div id="nav" class="container">
		<div class="row">
			<div class="span12">
				<?php print theme('links', $primary_links, array('class' => 'menu span9 offset3 links primary-links')) ?>
			</div>
		</div>
	</div>
</div>