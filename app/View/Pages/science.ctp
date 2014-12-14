<?= 
$this->element('header', array(
  'linkprev' => "/pages/prof",
  'linknext' => "/pages/finance"
)); 
?>
<div class="l-main stage-bg_prof">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Наука</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-prof.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>
        <div class="circles">
          <a href="<?= Router::url('/pages/info/06-01-1') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-01-1</div>
          </a>
          <a href="<?= Router::url('/pages/info/06-01-2') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-01-2</div>
          </a>
          <a href="<?= Router::url('/pages/info/06-02') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/06-03') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-03</div>
          </a>
          <a href="<?= Router::url('/pages/info/06-04') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-04</div>
          </a>
          <a href="<?= Router::url('/pages/info/06-05') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-05</div>
          </a>
          <a href="<?= Router::url('/pages/info/08-02') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">08-02</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>