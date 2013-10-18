<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'product_id'); ?>
		<?php echo $form->textField($model, 'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'res_id'); ?>
		<?php echo $form->textField($model, 'res_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->textField($model, 'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'prod_cat_id'); ?>
		<?php echo $form->textField($model, 'prod_cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'image'); ?>
		<?php echo $form->textField($model, 'image',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'price'); ?>
		<?php echo $form->textField($model, 'price',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'created_at'); ?>
		<?php echo $form->textField($model, 'created_at',array('maxlength'=>'10')); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
