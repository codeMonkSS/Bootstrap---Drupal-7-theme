<div class="topbar">
	<div class="fill">
		<div class="container">
			<a class="brand" href="/"><?= $site_name ?></a>
			<?php print theme('links__system_main_menu', array(
			      'links' => $main_menu,
			      'attributes' => array(
			        'id' => 'main-menu',
			        'class' => array('links', 'clearfix', 'nav'),
			      ),
			      'heading' => array(
			        'text' => t(''),
			        'level' => 'h2',
			        'class' => array('element-invisible'),
			      ),
			    )); ?>
			<?= login_bar() ?>
		</div>
	</div>
</div>

<div class="container">

	<div class="content">
		<div class="row">
			<div class="span16">
				<?php print render($page['help']); ?>
				<?php print render($page['highlighted']); ?>
				<?php print render($page['header']); ?>
			</div>
		</div>
		<div class="row">
			<div class="span16">
				<?php print render($page['content']); ?>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="span8">
				<?php print render($page['footer-col1']); ?>&nbsp;
			</div>
			<div class="span8">
				<?php print render($page['footer-col2']); ?>&nbsp;
			</div>
		</div>
	</footer>
</div> <!-- /container -->