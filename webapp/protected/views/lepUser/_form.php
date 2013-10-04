
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-user-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('class'=>'mws-form')
));
?>	<div class="mws-form-inline">
		<div class="mws-form-row">
			<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
			<?php echo $form->errorSummary($model); ?>
		</div>

		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'username'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'username',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'password'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->passwordField($model, 'password',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'email'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'email',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'email'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'code'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'code',array('maxlength'=>'6')); ?>
				<?php echo $form->error($model,'code'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'first_name'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'first_name',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'first_name'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'last_name'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'last_name',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'last_name'); ?>
			</div>
		</div>


		<div class="mws-form-row">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</div>
<?php
$this->endWidget();
?>
