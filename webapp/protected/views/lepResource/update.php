<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);
?>

<div align="center">
    
    <a class="mws-stat" href="<?php echo Yii::app()->request->baseUrl."/lepComment/" ?>">
        <!-- Statistic Icon (edit to change icon) -->
        <span class="mws-stat-icon icol32-comment"></span>
        
        <!-- Statistic Content -->
        <span class="mws-stat-content">
            <span class="mws-stat-title">
                <?php echo Yii::t('strings','Comment'); ?>
            </span>
            <span class="mws-stat-value">
                <?php 
                    $lepComment=LepComment::model()->findAll(array(
                        'condition'=>'res_id=:res_id',
                        'params'=>array(':res_id'=> $_GET["id"] ),
                    ));
                    
                    echo count( $lepComment );
                ?>
            </span>
        </span>
    </a>
    
    
    <a class="mws-stat" href="<?php echo Yii::app()->request->baseUrl."/lepArticle/" ?>">
        <!-- Statistic Icon (edit to change icon) -->
        <span class="mws-stat-icon icol32-note"></span>
        
        <!-- Statistic Content -->
        <span class="mws-stat-content">
            <span class="mws-stat-title">
                <?php echo Yii::t('strings','Article'); ?>
            </span>
            <span class="mws-stat-value">
                <?php 
                    $lepArticle=LepArticle::model()->findAll(array(
                        'condition'=>'res_id=:res_id',
                        'params'=>array(':res_id'=> $_GET["id"] ),
                    ));
                    
                    echo count( $lepArticle );
                ?>
            </span>
        </span>
    </a>
    
    
    <a class="mws-stat" href="<?php echo Yii::app()->request->baseUrl."/lepEvent/" ?>">
        <!-- Statistic Icon (edit to change icon) -->
        <span class="mws-stat-icon icol32-events"></span>
        
        <!-- Statistic Content -->
        <span class="mws-stat-content">
            <span class="mws-stat-title">
                <?php echo Yii::t('strings','Event'); ?>
            </span>
            <span class="mws-stat-value">
                <?php 
                    $lepEvent=LepEvent::model()->findAll(array(
                        'condition'=>'res_id=:res_id',
                        'params'=>array(':res_id'=> $_GET["id"] ),
                    ));
                    
                    echo count( $lepEvent );
                ?>
            </span>
        </span>
    </a>
    
    
    
    
    <a class="mws-stat" href="<?php echo Yii::app()->request->baseUrl."/lepProduct/" ?>">
        <!-- Statistic Icon (edit to change icon) -->
        <span class="mws-stat-icon icol32-brick"></span>
        
        <!-- Statistic Content -->
        <span class="mws-stat-content">
            <span class="mws-stat-title">
                <?php echo Yii::t('strings','Product'); ?>
            </span>
            <span class="mws-stat-value">
                <?php 
                    $lepProduct=LepProduct::model()->findAll(array(
                        'condition'=>'res_id=:res_id',
                        'params'=>array(':res_id'=> $_GET["id"] ),
                    ));
                    
                    echo count( $lepProduct );
                ?>
            </span>
        </span>
    </a>
    
    <a class="mws-stat" href="<?php echo Yii::app()->request->baseUrl."/lepPromo/" ?>">
        <!-- Statistic Icon (edit to change icon) -->
        <span class="mws-stat-icon icol32-weather-sun"></span>
        
        <!-- Statistic Content -->
        <span class="mws-stat-content">
            <span class="mws-stat-title">
                <?php echo Yii::t('strings','Promo'); ?>
            </span>
            <span class="mws-stat-value">
                <?php 
                    $lepPromo=LepPromo::model()->findAll(array(
                        'condition'=>'res_id=:res_id',
                        'params'=>array(':res_id'=> $_GET["id"] ),
                    ));
                    
                    echo count( $lepPromo );
                ?>
            </span>
        </span>
    </a>
</div>

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