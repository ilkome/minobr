<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/03-03?from=" . $comeFrom,
  'linknext' => "/pages/info/03-05?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/03-04.png') ?>" alt=""></div>
    </div>
  </div>
</div>