<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'comment_id'); ?>
		<?php echo $form->textField($model, 'comment_id',array('maxlength'=>'10')); ?>
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
		<?php echo $form->label($model, 'comment'); ?>
		<?php echo $form->textArea($model, 'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'created_at'); ?>
		<?php echo $form->textField($model, 'created_at',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'subject'); ?>
		<?php echo $form->textField($model, 'subject',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rating'); ?>
		<?php echo $form->textField($model, 'rating',array('maxlength'=>'255')); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
