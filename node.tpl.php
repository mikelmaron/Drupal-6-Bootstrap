<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php if ($page == 0): ?>
	<h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

	<?php if ($submitted): ?>
	<div class="meta">
		<div class="submitted"><?php print $submitted ?></div>
	</div>
	<?php endif; ?>

	<div class="content clear-block">
		<?php print $picture ?>
		<?php print $content ?>
	</div>

<?php
	if ($links) {
		print '<div class="node-links">'. $links .'</div>';
	}
?>

</div>