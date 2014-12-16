<?= 
$this->
element('header', array(
  'linkprev' => "/pages/technical",
  'linknext' => "/pages/finance"
)); 
?>
<div class="l-main stage-bg_univer">
  <div class="stage-bg__in stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">университет</div>
        <div class="stage-box__desc_univer js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-univer.png') ?>" alt=""></div>
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">29% всех студентов</div>
            <div class="stage-text__content">вузов России обучаются в Центральном федеральном округе</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">5000 студентов</div>
            <div class="stage-text__content">приходится в России на 1 ВУЗ (без учета филиалов)</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">9,5% всех</div>
            <div class="stage-text__content">бюджетных мест предназначены для будущих педагогов</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="5">
            <div class="stage-text__title">500 млн рублей</div>
            <div class="stage-text__content">составляет объем финансирования проекта «Новые кадры для ОПК» в 2014 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="61">
            <div class="stage-text__title">На 7% увеличится</div>
            <div class="stage-text__content">стипендиальный фонд к 2016 году по сравнению с 2014 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="62">
            <div class="stage-text__title">На 7% увеличится</div>
            <div class="stage-text__content">стипендиальный фонд к 2016 году по сравнению с 2014 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="7">
            <div class="stage-text__title">10 лет дается</div>
            <div class="stage-text__content">на возвращение образовательного кредита после получения диплома</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="8">
            <div class="stage-text__title">На 7% увеличится</div>
            <div class="stage-text__content">финансирование ВУЗов в 2016 году по сравнению с 2014 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="9">
            <div class="stage-text__title">На 41% превосходит</div>
            <div class="stage-text__content">зарплата преподавателей ВУЗов среднюю по России зарплату</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>

        </div>
        

        <div class="circles js-change-stage-text" id="owl-carousel">
          <a href="<?= Router::url('/pages/info/04-01?from=univer') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-16.png') ?>" alt=""></div>
            <div class="circle__name">Численность студентов</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-02?from=univer') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-17.png') ?>" alt=""></div>
            <div class="circle__name">Количество вузов</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Государственные гарантии</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-04?from=univer') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">Бюджетные места</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-05?from=univer') ?>" class="circle" data-stage="5">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-22.png') ?>" alt=""></div>
            <div class="circle__name">Новые кадры для «оборонки» </div>
          </a>
          <a href="<?= Router::url('/pages/info/04-06-1?from=univer') ?>" class="circle" data-stage="61">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-18.png') ?>" alt=""></div>
            <div class="circle__name">Стипендии студентов</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-06-2?from=univer') ?>" class="circle" data-stage="62">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-18.png') ?>" alt=""></div>
            <div class="circle__name">Стипендии аспирантов</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Общежития</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-08?from=univer') ?>" class="circle" data-stage="7">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">Образовательное кредитование</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Стоимость обучения в вузе</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-10?from=univer') ?>" class="circle" data-stage="8">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-14.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-11?from=univer') ?>" class="circle" data-stage="9">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/pic-15.png') ?>" alt=""></div>
            <div class="circle__name">Зарплаты преподавателей вузов</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Финансирование проекта "5топ100"</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Участники программы "Глобальное образование"</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">Социальная поддержка граждан</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager_num4"></div>
  </div>
</div>