<!DOCTYPE html>
<html>
	<head>
		<?= $head ?>
		<title><?= $head_title ?></title>
		<?= $styles ?>
		<?= $scripts ?>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('.showlogin').click(function(){
					jQuery('.showlogin').hide();
					jQuery('#horizontal-login-block').show();
				});
				jQuery('.fadein img:gt(0)').hide();
				setInterval(function(){jQuery('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 6000);
				jQuery('.twipsytip').twipsy({
					live: true
				});
			});
		</script>
	</head>
	<body class="<?= $classes ?>" <?= $attributes ?>>
		<?= $page_top ?>
		<?= $page ?>
		<?= $page_bottom ?>
	</body>
</html>