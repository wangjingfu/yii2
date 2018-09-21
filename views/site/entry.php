<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('用户名：');?>

<?= $form->field($model, 'email')->label('电子邮箱：');?>

<div class="form-group">
	<?= Html::submitButton('保存', ['class'=>'btn btn-primary']);?>
</div>

<?php $form->end(); ?>