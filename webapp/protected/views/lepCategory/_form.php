<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-category-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model, 'parent_id',array('maxlength'=>'10')); ?>
		<?php echo $form->error($model,'parent_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'order_num'); ?>
		<?php echo $form->textField($model, 'order_num',array('maxlength'=>'10')); ?>
		<?php echo $form->error($model,'order_num'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title',array('maxlength'=>'255')); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textField($model, 'path',array('maxlength'=>'255')); ?>
		<?php echo $form->error($model,'path'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'path_url'); ?>
		<?php echo $form->textField($model, 'path_url',array('maxlength'=>'255')); ?>
		<?php echo $form->error($model,'path_url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'parents'); ?>
		<?php echo $form->textField($model, 'parents',array('maxlength'=>'255')); ?>
		<?php echo $form->error($model,'parents'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'meta_keyword'); ?>
		<?php echo $form->textArea($model, 'meta_keyword'); ?>
		<?php echo $form->error($model,'meta_keyword'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'seo_title'); ?>
		<?php echo $form->textField($model, 'seo_title',array('maxlength'=>'255')); ?>
		<?php echo $form->error($model,'seo_title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'has_child'); ?>
		<?php echo $form->textField($model, 'has_child',array('maxlength'=>'1')); ?>
		<?php echo $form->error($model,'has_child'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'num_res'); ?>
		<?php echo $form->textField($model, 'num_res'); ?>
		<?php echo $form->error($model,'num_res'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model, 'created_at',array('maxlength'=>'10')); ?>
		<?php echo $form->error($model,'created_at'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->