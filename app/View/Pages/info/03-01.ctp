<?=
$this->element('infoheader', array(
  'linkup' => "/pages/" . $comeFrom,
  'linknext' => "/pages/info/03-02?from=" . $comeFrom
))
?>
<div class="l-main">
  <div class="l-main__in">
    <div class="l-content">
      <div class="content__pic">
        <img src="<?= Router::url('/img/infograph/03-01.png') ?>" alt=""></div>
    </div>
  </div>
</div>