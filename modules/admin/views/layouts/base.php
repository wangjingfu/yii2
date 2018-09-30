<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\View;
use app\modules\assets\admin\ConditionAsset;
use app\modules\assets\admin\AdminAsset;

$this->title = 'AdminLTE';
ConditionAsset::register($this);
AdminAsset::register($this);
$this->registerJs("$.widget.bridge('uibutton', $.ui.button);", View::POS_END);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
    var _csrf = '<?= Yii::$app->request->csrfToken; ?>';
    </script>
</head>
<body class="hold-transition skin-green sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
<?php if (isset($this->blocks['admin'])): ?>
    <?= $this->blocks['admin'] ?>
<?php endif; ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
