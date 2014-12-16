<?= 
$this->
element('header', array(
  'linkprev' => "/pages/school",
  'linknext' => "/pages/univer"
)); 
?>
<div class="l-main stage-bg_technical">
  <div class="stage-bg__in stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Техникум или колледж</div>
        
        
        <div class="stage-box__desc_technical js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-technical.png') ?>" alt=""></div>
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">На 25% снизилось</div>
            <div class="stage-text__content">количество студентов среднего профессионального образования по сравнению с 1985 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">44% всех учреждений</div>
            <div class="stage-text__content">среднего профессионального образования — это ПТУ и техникумы</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">4000 рублей</div>
            <div class="stage-text__content">максимальная стипендия студента колледжа или техникума.</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">270 млн руб.</div>
            <div class="stage-text__content">выделили коммерческие компани на финансирование WorldSkills</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="5">
            <div class="stage-text__title">Более чем в 2 раза</div>
            <div class="stage-text__content">увеличилось финансирование учреждений среднего профессионального образования в 2014 году по сравнению с 2013 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="6">
            <div class="stage-text__title">На 4% превосходит</div>
            <div class="stage-text__content">зарплата преподавателей среднего профессионального образования зарплату среднего медицинского персонала</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="7">
            <div class="stage-text__title">3,8 млрд рублей</div>
            <div class="stage-text__content">расходует Минобрнауки в создание условий для обучения детей-инвалидов</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>
        </div>
        

        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/03-01?from=technical') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-16.png') ?>" alt=""></div>
            <div class="circle__name">Численность студентов</div>
          </a>
          <a href="<?= Router::url('/pages/info/03-02?from=technical') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-17.png') ?>" alt=""></div>
            <div class="circle__name">Техникумы и колледжи</div>
          </a>
          <a href="<?= Router::url('/pages/info/03-03?from=technical') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-18.png') ?>" alt=""></div>
            <div class="circle__name">Стипендии</div>
          </a>
          <a href="<?= Router::url('/pages/info/03-04?from=technical') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-19.png') ?>" alt=""></div>
            <div class="circle__name">WorldSkills</div>
          </a>
          <a href="<?= Router::url('/pages/info/03-05?from=technical') ?>" class="circle" data-stage="5">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-14.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="<?= Router::url('/pages/info/03-06?from=technical') ?>" class="circle" data-stage="6">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-15.png') ?>" alt=""></div>
            <div class="circle__name">Зарплаты преподавателей</div>
          </a>
          <a href="<?= Router::url('/pages/info/13-01?from=technical') ?>" class="circle" data-stage="7">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Молодежная политика</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Доступная среда </div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Социальная поддержка граждан</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager_num3"></div>
  </div>
</div>