<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);
?>

<a class="mws-stat" href="table.html#">
    <!-- Statistic Icon (edit to change icon) -->
    <span class="mws-stat-icon icol32-note"></span>
    
    <!-- Statistic Content -->
    <span class="mws-stat-content">
        <span class="mws-stat-title">
			<?php echo Yii::t('strings','Comment'); ?>
        </span>
        <span class="mws-stat-value">
        	<?php 
				echo '123';
				//$command = "SELECT * from lep_resource";
				//ß$dataReader=$command->query();
			?>
        </span>
    </span>
</a>


<a class="mws-stat" href="table.html#">
    <!-- Statistic Icon (edit to change icon) -->
    <span class="mws-stat-icon icol32-note"></span>
    
    <!-- Statistic Content -->
    <span class="mws-stat-content">
        <span class="mws-stat-title">
			<?php echo Yii::t('strings','Article'); ?>
        </span>
        <span class="mws-stat-value">
        	<?php 
				echo '123';
				//$command = "SELECT * from lep_resource";
				//ß$dataReader=$command->query();
			?>
        </span>
    </span>
</a>


<a class="mws-stat" href="table.html#">
    <!-- Statistic Icon (edit to change icon) -->
    <span class="mws-stat-icon icol32-note"></span>
    
    <!-- Statistic Content -->
    <span class="mws-stat-content">
        <span class="mws-stat-title">
			<?php echo Yii::t('strings','Event'); ?>
        </span>
        <span class="mws-stat-value">
        	<?php 
				echo '123';
				//$command = "SELECT * from lep_resource";
				//ß$dataReader=$command->query();
			?>
        </span>
    </span>
</a>

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