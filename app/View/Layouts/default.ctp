<!DOCTYPE html>
<!--	proscom.ru-->
<!--	Simple Communication-->
<html>
	<head>
		<title><?= $title_for_layout ?></title>
		<!-- Meta-->
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="favicon.png">
		<!-- Styles-->
		<link href="<?= Router::url('/css/style.css') ?>" rel="stylesheet">
		<link href="<?= Router::url('/css/owl.carousel.css') ?>" rel="stylesheet">
		<link href="<?= Router::url('/css/owl.theme.css') ?>" rel="stylesheet">
		<link href="<?= Router::url('/css/owl.transitions.css') ?>" rel="stylesheet">
		<!-- Scripts-->
		<script src="<?= Router::url('/js/jquery.min.js') ?>" type="text/javascript"></script>
		<script src="<?= Router::url('/js/owl.carousel.min.js') ?>" type="text/javascript"></script>
		<script src="<?= Router::url('/js/functions.js') ?>" type="text/javascript"></script>
	</head>
	<body class="page">
		<div class="style-nes">
			<div class="l-wrap-left">
				<ul class="menu-left">
					<li class="menu-left__item"><a href="#" class="menu-left__link">
							<div class="icon-map"></div></a></li>
					<li class="menu-left__item"><a href="#" class="menu-left__link">
							<div class="icon-com"></div></a></li>
					<li class="menu-left__item"><a href="#" class="menu-left__link">
							<div class="icon-graph"></div></a></li>
					<li class="menu-left__item"><a href="#" class="menu-left__link">
							<div class="icon-cup"></div></a></li>
				</ul>
			</div>
			<?= $this->fetch('content') ?>
		</div>
	</body>
</html>