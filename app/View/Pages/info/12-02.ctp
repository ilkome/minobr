<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/12-01?from=" . $comeFrom,
  'linknext' => "/pages/info/12-03?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/12-02.png') ?>" alt=""></div>
    </div>
  </div>
</div>
