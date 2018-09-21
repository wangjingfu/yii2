<?php $this->beginContent('@adminLayoutsPath/footer.php'); ?>

<?php $this->beginBlock('admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
<?= $content; ?>
</div>

<?php $this->endBlock(); ?>

<?php $this->endContent(); ?>
