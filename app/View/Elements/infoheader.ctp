<div class="panel-white">
  <div class="l-wrap">
    <div class="panel-white__in">
      <a href="<?= Router::url('/') ?>" class="logo-minobr icon fl-left"></a>
      <ul class="stage-navig stage-navig_sm">
        <li class="stage-navig__item">
        <? if (isset($linkprev)): ?>
          <a href="<?= Router::url($linkprev) ?>" class="stage-navig__link_prev">
            <div class="icon icon-arrow-left"></div>
            предыдущая инфографика
          </a>
        <? else: ?>
          <a class="stage-navig__link_prev is-disable">
            <div class="icon icon-arrow-left"></div>
            предыдущая инфографика
          </a>
        <? endif;?>
        </li>
        <li class="stage-navig__item">
          <a href="<?= Router::url($linkup) ?>" class="stage-navig__link_back">
            назад к сюжету
            <div class="icon icon-arrow-top"></div>
          </a>
        </li>
        <li class="stage-navig__item">
        <? if (isset($linknext)): ?>
          <a href="<?= Router::url($linknext) ?>" class="stage-navig__link_next">
            следующая инфографика
            <div class="icon icon-arrow-right"></div>
          </a>
        <? else: ?>
          <a class="stage-navig__link_next is-disable">
            следующая инфографика
            <div class="icon icon-arrow-right"></div>
          </a>
        <? endif; ?>
        </li>
      </ul>

      <?= $this->element("userinfo") ?>
    </div>
  </div>
</div>