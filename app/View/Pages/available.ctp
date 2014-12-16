<?= 
$this->element('header', array(
  'linkprev' => "/pages/further"
)); 
?>
<div class="l-main stage-bg_prof">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Доступная среда и социальная поддержка граждан</div>
        <div class="stage-box__desc">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-prof.png') ?>" alt=""></div>
          <div class="text fl-left">
            <img src="<?= Router::url('/img/c/prof-info.png') ?>" alt=""></div>
        </div>


        <div class="circles">
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">14-01</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">14-02</div>
          </a>
        </div>

      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>