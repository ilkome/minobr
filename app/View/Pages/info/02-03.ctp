<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/02-02?from=" . $comeFrom,
  'linknext' => "/pages/info/02-04?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/02-03.png') ?>" alt=""></div>
    </div>
  </div>
</div>