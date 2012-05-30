<div id="footer_wrapper">
	<div id="footer" class="container">
		<div class="row">
			<div class="span12">
				<?php if ($footer_message): ?>
					<div id="footer-message"><?php print $footer_message; ?></div>
				<?php endif; ?>
			</div>
			<div class="span4">
				<?php print $footer_left; ?>
			</div>
			<div class="span4">
				<?php print $footer_middle; ?>
			</div>
			<div class="span4">
				<?php print $footer_right; ?>
			</div>
		</div>
	</div> <!-- /footer -->
</div> <!-- /footer_wrapper -->