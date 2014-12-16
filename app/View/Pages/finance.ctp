<?= 
$this->element('header', array(
  'linkprev' => "/pages/science",
  'linknext' => "/pages/president"
)); 
?>
<div class="l-main stage-bg_finance">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Финансирование</div>
        

        <div class="stage-box__desc js-stage-text">
          <div class="img fl-left"><img src="<?= Router::url('/img/bg-finance.png') ?>" alt=""></div>
        
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">Финансирование</div>
            <div class="stage-text__content">образования складывается из средств бюджетов всех уровней</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">На 206 млрд рублей</div>
            <div class="stage-text__content">увеличились расходы на образование в 2014 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">545 млрд рублей</div>
            <div class="stage-text__content">расходуется в сфере образования на государственные программы</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="4">
            <div class="stage-text__title">31 млрд рублей</div>
            <div class="stage-text__content">расходуется на федеральные целевые программы в сфере образования</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="5">
            <div class="stage-text__title">На 30% </div>
            <div class="stage-text__content">планируется увеличить расходы на гос. задание в 2016 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="6">
            <div class="stage-text__title">57 млрд рублей</div>
            <div class="stage-text__content">объем субсидий для регионов в 2014 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="7">
            <div class="stage-text__title">На 33 млрд. рублей</div>
            <div class="stage-text__content">планируется увеличить финансирование программы к 2016 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>

        </div>


        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/07-00?from=finance') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-00</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-01?from=finance') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-02?from=finance') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-03?from=finance') ?>" class="circle" data-stage="4">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-03</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-04?from=finance') ?>" class="circle" data-stage="5">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-04</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-05?from=finance') ?>" class="circle" data-stage="6">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-05</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">07-06</div>
          </a>
          <a href="<?= Router::url('/pages/info/07-07?from=finance') ?>" class="circle" data-stage="7">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">07-07</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">06-05</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>