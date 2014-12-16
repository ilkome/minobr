<?= 
$this->element('header', array(
  'linkprev' => "/pages/president",
  'linknext' => "/pages/building"
)); 
?>
<div class="l-main stage-bg_top100">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">5топ100</div>
        

        <div class="stage-box__desc js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-5top100.png') ?>" alt="">
          </div>
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">5 университетов России</div>
            <div class="stage-text__content">войдут в рейтинг топ-100 мировых университетов к 2020 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">На 7% увеличится</div>
            <div class="stage-text__content">финансирование ВУЗов в 2016 году по сравнению с 2014 годом</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="lock">
            <div class="stage-text__title">Доступ закрыт</div>
          </div>
        </div>
        

        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/09-01?from=top100') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">09-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/04-10?from=top100') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">04-10</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">09-02</div>
          </a>
          <a href="#" class="circle" data-stage="lock">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/lock.png') ?>" alt=""></div>
            <div class="circle__name">08-01</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>