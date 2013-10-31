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
    <?php
		$CompanyName = "";
		if (!empty($_GET["res_id"])) {
			$lepResource = LepResource::model()->findByAttributes(array("res_id"=>$_GET["res_id"]));
			
			foreach($lepResource as $m){
				$CompanyName = $m->title;
			}
			echo $CompanyName;
		}
	?>
    <div class="mws-panel-body no-padding">
    	<?php
		$this->renderPartial('_form', array(
				'model' => $model));
		?>    </div>    	
</div>