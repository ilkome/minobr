<div class="panel-white">
	<div class="l-wrap">
		<div class="panel-white__in">
			<a class="logo-minobr icon fl-left"></a>
			<?= $this->element("userinfo") ?>
		</div>
	</div>
</div>
<div class="l-main_vac">
	<div class="l-main__in">
		<div class="map">
			<img src="<?= Router::url('/img/map-titles.png') ?>
			" alt="" class="map__img">
			<a href="<?= Router::url('/pages/children') ?>" class="map__item_children"></a>
			<a href="<?= Router::url('/pages/school') ?>" class="map__item_school"></a>
			<a href="<?= Router::url('/pages/technical') ?>" class="map__item_technical"></a>
			<a href="<?= Router::url('/pages/univer') ?>" class="map__item_univ"></a>
			<a href="<?= Router::url('/pages/prof') ?>" class="map__item_prof"></a>
		</div>
	</div>
</div>