<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/07-04?from=" . $comeFrom,
  'linknext' => "/pages/info/07-06?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/07-05.png') ?>" alt=""></div>
    </div>
  </div>
</div>
