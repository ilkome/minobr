<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/02-05?from=" . $comeFrom,
  'linknext' => "/pages/info/02-07?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/02-06.png') ?>" alt=""></div>
    </div>
  </div>
</div>