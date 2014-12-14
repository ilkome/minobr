<? if (isset($userdata)): ?>
  <a href="<?= Router::url('/users/logout') ?>" class="user-prev fl-right">
    <div class="user-prev__ava disp-tc_m"><img src="<?= Router::url('/img/ava-default.png') ?>" alt="" class="user-prev__pic"></div>
    <div class="user-prev__name disp-tc_m"><?= $userdata['login'] ?></div>
  </a>
<? else: ?>
	<a href="<?= Router::url('/users/login') ?>" class="user-prev fl-right">Войти</a>
<? endif; ?>