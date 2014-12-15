<?= 
$this->element('header', array(
  'linkprev' => "/pages/further",
  'linknext' => "/pages/available"
)); 
?>
<div class="l-main stage-bg_youth-policy">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Молодежная политика</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-youth.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>
        <div class="circles">
          <a href="<?= Router::url('/pages/info/13-01?from=youth') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">13-01</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>