<?= 
$this->element('header', array(
  'linkprev' => "/pages/building",
  'linknext' => "/pages/further"
)); 
?>
<div class="l-main stage-bg_global">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Глобальное образование</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-global.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>
        <div class="circles">
          <a href="<?= Router::url('/pages/info/11-01?from=global') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">11-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/11-02?from=global') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">11-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-08?from=global') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">04-08</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>