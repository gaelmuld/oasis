<html>

<head>
	<?= view('template/head',$head); ?>
</head>

<body>
	<div id="app">
		<nav id="principal-nav">
			<?=  view('template/nav') ?>

		</nav>
		<main id="<?=$idp ?>">
			<?= view($view,$body); ?>
		</main>
		<?php/*  view('template/debugvar')*/ ?>
	</div>
	<script>
	</script>
	<?php if(isset($scriptJs)): ?>
	<script src=<?= asset_js($scriptJs) ?>></script>
	<?php endif; ?>
</body>

</html>
