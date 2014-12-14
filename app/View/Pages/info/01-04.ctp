<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/01-03?from=" . $comeFrom,
  'linknext' => "/pages/info/01-05?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/01-04.png') ?>" alt=""></div>
    </div>
  </div>
</div>