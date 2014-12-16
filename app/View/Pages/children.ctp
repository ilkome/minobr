<?= 
$this->
element('header', array(
  'linknext' => "/pages/school"
)); 
?>
<div class="l-main stage-bg_children">
  <div class="stage-bg__in stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Детский сад</div>
        
        <div class="stage-box__desc js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-children.png') ?>" alt=""></div>
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">На 360 тыс.</div>
            <div class="stage-text__content">увеличилось число дошкольников в России в 2013 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">На 10% </div>
            <div class="stage-text__content">образовательных учреждений в городах больше чем в сельской местности</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">Бесплатное дошкольное</div>
            <div class="stage-text__content">образование гарантирует государство</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">100% составит</div>
            <div class="stage-text__content">доступность дошкольного образования к 2016 году</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="5">
            <div class="stage-text__title">На 50 млрд. руб. </div>
            <div class="stage-text__content">увеличены расходы на дошкольное образование в 2013 и 2014 годах за счет средств на реализацию МРСДО</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="6">
            <div class="stage-text__title">27 760 рублей</div>
            <div class="stage-text__content"> в месяц — средняя зарплата воспитателя</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="7">
            <div class="stage-text__title">Более 430 тысяч</div>
            <div class="stage-text__content">мест для дошкольников было создано за 2013–2014 годы</div>
          </div>
        
          <div class="stage-text fl-left hide" data-stage="8">
            <div class="stage-text__title">3,8 млрд рублей</div>
            <div class="stage-text__content">расходует Минобрнауки в создание условий для обучения детей-инвалидов</div>
          </div>
        </div>
        
        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/01-01?from=children') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-26.png') ?>" alt=""></div>
            <div class="circle__name">Численность детей дошкольного возраста</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-02?from=children') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-27.png') ?>" alt=""></div>
            <div class="circle__name">Число дошкольных организаций в России</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-03?from=children') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-2.png') ?>" alt=""></div>
            <div class="circle__name">Государственные гарантии</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-04?from=children') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-28.png') ?>" alt=""></div>
            <div class="circle__name">Доступность дошкольного образования</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-05?from=children') ?>" class="circle" data-stage="5">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-14.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="<?= Router::url('/pages/info/01-06?from=children') ?>" class="circle" data-stage="6">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-15.png') ?>" alt=""></div>
            <div class="circle__name">Заработная плата воспитателей</div>
          </a>
          <a href="<?= Router::url('/pages/info/10-01?from=children') ?>" class="circle" data-stage="7">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-29.png') ?>" alt=""></div>
            <div class="circle__name">Строительство детских садов</div>
          </a>
          <a href="<?= Router::url('/pages/info/14-01?from=children') ?>" class="circle" data-stage="8">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-30.png') ?>" alt=""></div>
            <div class="circle__name">Доступная среда</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>