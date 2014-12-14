<div class="panel-white">
  <div class="l-wrap">
    <div class="panel-white__in"><a href="<?= Router::url('/') ?>" class="logo-minobr icon fl-left"></a>
      <ul class="stage-navig">
        <li class="stage-navig__item">
          <? if (isset($linkprev)): ?>
            <a class="stage-navig__link_prev" href="<?= Router::url($linkprev) ?>"> 
              <div class="icon icon-arrow-left"></div>назад
            </a>
          <? else: ?>
            <a class="stage-navig__link_prev is-disable"> 
              <div class="icon icon-arrow-left"></div>назад
            </a>
          <? endif; ?>
        </li>
        <li class="stage-navig__item">
          <a href="<?= Router::url('/') ?>" class="stage-navig__link_back">
            назад к карте
            <div class="icon icon-arrow-top"></div>
          </a>
        </li>
        <li class="stage-navig__item">
          <? if (isset($linknext)): ?>
            <a class="stage-navig__link_next" href="<?= Router::url($linknext) ?>">
              далее
              <div class="icon icon-arrow-right"></div>
            </a>
          <? else: ?>
            <a class="stage-navig__link_next is-disable">
              далее
              <div class="icon icon-arrow-right"></div>
            </a>
          <? endif; ?>
        </li>
      </ul>

      <?= $this->element("userinfo") ?>
    </div>
  </div>
</div>