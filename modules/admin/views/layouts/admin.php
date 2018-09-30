<?php $this->beginContent('@adminLayoutsPath/base.php'); ?>
<?php $this->beginBlock('admin'); ?>
<!-- 顶部 -->
<?= $this->render('header.php') ?>
<!-- 左侧导航 -->
<?= $this->render('nav.php') ?>
<!-- 右侧内容 -->
<?= $this->render('content.php',['content' => $content]) ?>
<!-- 底部 -->
<?= $this->render('footer.php') ?>
<?php $this->endBlock(); ?>
<?php $this->endContent(); ?>
