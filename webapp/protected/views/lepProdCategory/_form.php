
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-prod-category-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('class'=>'mws-form')
));
?>	<div class="mws-form-inline">
		<div class="mws-form-row">
			<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
			<?php echo $form->errorSummary($model); ?>
		</div>

		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'parent_id'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'parent_id'); ?>
				<?php echo $form->error($model,'parent_id'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'title'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'title',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'title'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'seo_title'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'seo_title',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'seo_title'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'status'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'status'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'path'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'path',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'path'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'path_url'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'path_url',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'path_url'); ?>
			</div>
		</div>


		<div class="mws-form-row">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</div>
<?php
$this->endWidget();
?>
