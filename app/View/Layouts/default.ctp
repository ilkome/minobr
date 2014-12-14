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
		<script src="<?= Router::url('/js/social.js') ?>" type="text/javascript"></script>
		<script src="<?= Router::url('/js/functions.js') ?>" type="text/javascript"></script>
	</head>
	<body class="page">
		<div class="style-nes">
			<div class="l-wrap-left">
				<ul class="menu-left">
					<li class="menu-left__item"><a href="<?= Router::url('/') ?>" class="menu-left__link">
							<div class="icon-map"></div></a></li>
					<li class="menu-left__item"><a href="<?= Router::url('/pages/side/faq') ?>" class="menu-left__link">
							<div class="icon-com"></div></a></li>
					<li class="menu-left__item"><a href="<?= Router::url('/pages/side/rating') ?>" class="menu-left__link">
							<div class="icon-graph"></div></a></li>
					<li class="menu-left__item"><a href="<?= Router::url('/pages/side/troph') ?>" class="menu-left__link">
							<div class="icon-cup"></div></a></li>
				</ul>
			</div>

			<?= $this->fetch('content') ?>

			<footer class="footer">
				<div class="l-wrap">
					<div class="footer__in">
						<div class="footer__copy fl-left">2014 © Все права защищены</div>
						<div class="share fl-right">
							<div class="share__title">Поделиться</div>
							<ul class="share__links">
								<li class="share__item">
									<a href="#" class="share__link_fb"></a>
								</li>
								<li class="share__item">
									<a href="#" class="share__link_vk"></a>
								</li>
								<li class="share__item">
									<a href="#" class="share__link_tw"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>