<?= 
$this->element('header', array(
  'linkprev' => "/pages/president",
  'linknext' => "/pages/building"
)); 
?>
<div class="l-main stage-bg_prof">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">5топ100</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-prof.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>
        <div class="circles">
          <a href="<?= Router::url('/pages/info/09-01?from=top100') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">09-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/09-02?from=top100') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">09-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/08-01?from=top100') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">08-01</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>