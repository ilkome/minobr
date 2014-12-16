<?= 
$this->element('header', array(
  'linkprev' => "/pages/top100"
)); 
?>
<div class="l-main stage-bg_bilding">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Строительство детских садов</div>
        

        <div class="stage-box__desc js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-building.png') ?>" alt="">
          </div>

          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">Более 430 тысяч</div>
            <div class="stage-text__content">мест для дошкольников было создано за 2013–2014 годы</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">1000 млрд. рублей</div>
            <div class="stage-text__content">выделено на модернизацию системы дошкольного образования субъектам России в 2013-2014 годах</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">100% составит</div>
            <div class="stage-text__content">доступность дошкольного образования в 2016 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">3,8 млрд рублей</div>
            <div class="stage-text__content">расходует Минобрнауки в создание условий для обучения детей-инвалидов.</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>
        </div>


        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/10-01?from=building') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">10-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/10-02?from=building') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">10-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-04?from=building') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">01-04</div>
          </a>
          <a href="<?= Router::url('/pages/info/14-01?from=building') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">01-04</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">12-01</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>