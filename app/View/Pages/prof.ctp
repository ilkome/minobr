<?= 
$this->element('header', array(
  'linkprev' => "/pages/univer",
  'linknext' => "/pages/science"
)); 
?>
<div class="l-main stage-bg_prof">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Дополнительное профессиональное образование</div>
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
            <div class="circle__name">Дополнительное профессиональное образование</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Образовательные организации</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="#" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">LINK Количество вузов</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>