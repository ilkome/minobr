<?= 
$this->element('header', array(
  'linkprev' => "/pages/finance",
  'linknext' => "/pages/top100"
)); 
?>
<div class="l-main stage-bg_decrees">
  <div class="stage-bg__in">
    <div class="l-main__in">
      <div class="stage-box">
        <div class="stage-box__name">Указы президента</div>
        
        <div class="stage-box__desc js-stage-text">
          <div class="img fl-left">
            <img src="<?= Router::url('/img/bg-president.png') ?>" alt=""></div>
          
          
          <div class="stage-text fl-left" data-stage="1">
            <div class="stage-text__title">100% составит</div>
            <div class="stage-text__content">доступность дошкольного образования в 2016 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="2">
            <div class="stage-text__title">25 млрд рублей </div>
            <div class="stage-text__content">составит ежегодное финансирование науки к 2018 году</div>
          </div>

          <div class="stage-text fl-left hide" data-stage="3">
            <div class="stage-text__title">200% от средней</div>
            <div class="stage-text__content">заработной платы по региону будут получать преподаватели вузов.</div>
          </div>

        </div>
        

        <div class="circles js-change-stage-text">
          <a href="<?= Router::url('/pages/info/08-01?from=president') ?>" class="circle" data-stage="1">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">08-01</div>
          </a>
          <a href="<?= Router::url('/pages/info/08-02?from=president') ?>" class="circle" data-stage="2">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">08-02</div>
          </a>
          <a href="<?= Router::url('/pages/info/08-03?from=president') ?>" class="circle" data-stage="3">
            <div class="circle__pic">
              <img src="<?= Router::url('/img/cir/quest.png') ?>" alt=""></div>
            <div class="circle__name">08-03</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pager"></div>
  </div>
</div>