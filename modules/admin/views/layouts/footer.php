<?php $this->beginContent('@adminLayoutsPath/slider.php'); ?>

<?php $this->beginBlock('footer'); ?>

<?php if (isset($this->blocks['admin'])): ?>
    <?= $this->blocks['admin'] ?>
<?php else: ?>
    
<?php endif; ?>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

<div class="control-sidebar-bg"></div>

<?php $this->endBlock();  ?>

<?php $this->endContent(); ?>