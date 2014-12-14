<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linkprev' => "/pages/info/06-01-1?from=" . $comeFrom,
  'linknext' => "/pages/info/06-02?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/06-01-2.png') ?>" alt=""></div>
    </div>
  </div>
</div>
