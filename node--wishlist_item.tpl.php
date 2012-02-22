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
		<ul class="unstyled">
		<?php
			$price = bootstrap_getFieldValue($node, 'field_wishlist_item_price');
			if($price){
				echo '<li><strong>Pris:</strong> '.$price[0].'</li>';
		    }
			$color = bootstrap_getFieldValue($node, 'field_wishlist_item_color');
			if($color){
				echo '<li><strong>Farve:</strong> '.$color[0].'</li>';
		    }
			$size = bootstrap_getFieldValue($node, 'field_wishlist_item_size');
			if($size){
				echo '<li><strong>Størrelse:</strong> '.$size[0].'</li>';

		    }
			$manufacturer = bootstrap_getFieldValue($node, 'field_wishlist_manufacturer');
			if($manufacturer){
				echo '<li><strong>Producent:</strong> '.$manufacturer[0].'</li>';
		    }
			$stores = bootstrap_getFieldValue($node, 'field_wishlist_online_store');
			if($stores){
				if(count($stores) == 1){
					echo '<li><strong>Butik:</strong> '.$stores[0].'</li>';
				}else{
					echo '<li><strong>Butikker:</strong><ul class="unstyled"> ';
					foreach($stores as $store){
						echo '<li>'.$store.'</li>';
					}
					echo '</ul></li>';
				}
		    }
		?>
		</ul>
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
		  <?php endif; ?>

		  <?php print render($content['comments']); ?>
	</div>
	<div class="span8">
		<?php
		if(!empty($node->field_wishlist_item_i_product)){
		?>
		<div class="bootstrap gallery">
		  <div class="fadein">
			<?php
				foreach($node->field_wishlist_item_i_product['und'] as $imgRaw){
					echo '<img title="'.$imgRaw['title'].'" src="'.image_style_url('large', $imgRaw['uri']).'" />';
				}
			?>
		  </div>
		  <ul class="media-grid">
			<?php
				foreach($node->field_wishlist_item_i_product['und'] as $imgRaw){
					echo '<li><a href="'.file_create_url($imgRaw['uri']).'">';
					echo '<img title="'.$imgRaw['title'].'" data-large="'.image_style_url('large', $imgRaw['uri']).'" src="'.image_style_url('square_thumbnail90x90', $imgRaw['uri']).'" />';
					echo '</a></li>';
				}
			?>
		  </ul>
		</div>
		<?php
		}
		?>
	</div>
  </div>
</div>