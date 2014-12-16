<?= 
$this->element('header', array(
  'linkprev' => "/pages/global",
  'linknext' => "/pages/youth"
)); 
?>
<div class="l-main stage-bg_children-more">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Дополнительное образование для детей</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-further.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>
        <div class="circles">
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">12-01</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">12-02</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">12-03</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">12-04</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">01-01</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">02-01</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>