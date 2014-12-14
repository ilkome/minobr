<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/04-07?from=" . $comeFrom,
  'linknext' => "/pages/info/04-09?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/04-08.png') ?>" alt=""></div>
    </div>
  </div>
</div>