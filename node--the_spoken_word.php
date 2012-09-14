<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<h1><?= render($title) ?></h1>
	<div class="row">
		<div class="span8">
			<?php
			$body = bootstrap_getFieldValue($node, 'body');
			if($body){
				echo $body[0];
			}
			?>
		</div>
		<div class="span8">
		</div>
	</div>
	<div class="row">
		<div class="span16">
			<?php
				// Remove the "Add new comment" link on the teaser page or if the comment
				// form is being displayed on the same page.
				if ($teaser || !empty($content['comments']['comment_form'])) {
					unset($content['links']['comment']['#links']['comment-add']);
				}
				// Only display the wrapper div if there are links.
				$links = render($content['links']);
				if ($links):
				?>
					<div class="link-wrapper">
						<?php print $links; ?>
					</div>
					<?php 
				endif; 
			?>
			<?php print render($content['comments']); ?>
		</div>
	</div>
</div>