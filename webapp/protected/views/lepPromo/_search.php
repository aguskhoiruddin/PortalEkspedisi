<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'promo_id'); ?>
		<?php echo $form->textField($model, 'promo_id'); ?>
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
		<?php echo $form->label($model, 'promo'); ?>
		<?php echo $form->textArea($model, 'promo'); ?>
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
