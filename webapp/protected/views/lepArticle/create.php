<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Create'),
);
?>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><?php echo GxHtml::encode($model->label()); ?></span>
    </div>
    <div class="mws-panel-body no-padding">
    	<?php
		$this->renderPartial('_form', array(
				'model' => $model));
		?>    </div>    	
</div>