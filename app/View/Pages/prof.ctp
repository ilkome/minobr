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
          <a href="<?= Router::url('/pages/info/05-01?from=prof') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-25.png') ?>" alt=""></div>
            <div class="circle__name">Дополнительное профессиональное образование</div>
          </a>
          <a href="<?= Router::url('/pages/info/05-02?from=prof') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-17.png') ?>" alt=""></div>
            <div class="circle__name">Образовательные организации</div>
          </a>
          <a href="<?= Router::url('/pages/info/05-03?from=prof') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-14.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-02?from=prof') ?>" class="circle">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">LINK Количество вузов</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>