<?= 
$this->
element('header', array(
  'linkprev' => "/pages/children",
  'linknext' => "/pages/technical"
)); 
?>
<div class="l-main stage-bg_school">
  <div class="stage-bg__in stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Школа</div>
        
        <div class="stage-box__desc_school js-stage-text">
          <div class="img fl-left" data-stage="1">
            <img src="<?= Router::url('/img/bg-school.png') ?>" alt=""></div>
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">13,5 млн.</div>
            <div class="stage-text__content">школьников в России</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">6 школьников</div>
            <div class="stage-text__content">приходится в России на одного учителя</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">Только 40%</div>
            <div class="stage-text__content">школ России находятся в городах</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">Бесплатность</div>
            <div class="stage-text__content">и общедоступность основного общего образования гарантируется государством</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="5">
            <div class="stage-text__title">Таланты</div>
            <div class="stage-text__content">поддерживаются государством</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="6">
            <div class="stage-text__title">Более 30 млрд. рублей </div>
            <div class="stage-text__content">составляют расходы на общее образование в 2014 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="7">
            <div class="stage-text__title">Зарплаты учителей</div>
            <div class="stage-text__content">и средние зарплаты по регионам практически сравнялись</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="8">
            <div class="stage-text__title">3,8 млрд рублей</div>
            <div class="stage-text__content">расходует Минобрнауки в создание условий для обучения детей-инвалидов</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>
        
        </div>

        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/02-01?from=school') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-8.png') ?>" alt=""></div>
            <div class="circle__name">Численность школьников</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-02?from=school') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-20.png') ?>" alt=""></div>
            <div class="circle__name">Численность учителей</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-03?from=school') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-10.png') ?>" alt=""></div>
            <div class="circle__name">Школы</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-04?from=school') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-11.png') ?>" alt=""></div>
            <div class="circle__name">Государственные гарантии</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-05?from=school') ?>" class="circle" data-stage="5">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">Поддержка способных учеников</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-06?from=school') ?>" class="circle" data-stage="6">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-13.png') ?>" alt=""></div>
            <div class="circle__name">ЕГЭ</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-07?from=school') ?>" class="circle" data-stage="7">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-14.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="<?= Router::url('/pages/info/02-08?from=school') ?>" class="circle" data-stage="8">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-15.png') ?>" alt=""></div>
            <div class="circle__name">Зарплаты учителей</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Молодежная политика</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">"Доступная среда"</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Социальная поддержка граждан</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager_num2"></div>
  </div>
</div>