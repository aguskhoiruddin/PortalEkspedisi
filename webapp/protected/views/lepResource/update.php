
<h1><?php echo Yii::t('app', 'Update') . ' Company ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>