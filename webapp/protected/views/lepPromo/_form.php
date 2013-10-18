
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-promo-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('class'=>'mws-form')
));
?>	<div class="mws-form-inline">
		<div class="mws-form-row">
			<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
			<?php echo $form->errorSummary($model); ?>
		</div>

		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'res_id'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'res_id'); ?>
				<?php echo $form->error($model,'res_id'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'user_id'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'user_id'); ?>
				<?php echo $form->error($model,'user_id'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'promo'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'promo'); ?>
				<?php echo $form->error($model,'promo'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'created_at'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'created_at',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'created_at'); ?>
			</div>
		</div>


		<div class="mws-form-row">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</div>
<?php
$this->endWidget();
?>
