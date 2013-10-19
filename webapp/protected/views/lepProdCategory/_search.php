<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'category_id'); ?>
		<?php echo $form->textField($model, 'category_id',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'parent_id'); ?>
		<?php echo $form->textField($model, 'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'seo_title'); ?>
		<?php echo $form->textField($model, 'seo_title',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'path'); ?>
		<?php echo $form->textField($model, 'path',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'path_url'); ?>
		<?php echo $form->textField($model, 'path_url',array('maxlength'=>'255')); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
