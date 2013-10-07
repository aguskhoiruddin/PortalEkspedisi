
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-article-form',
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
				<?php //echo $form->textField($model, 'res_id'); ?>
                <?php
					$data = CHtml::listData(lepResource::model()->findAll(), 
						'res_id', 'title');
					echo $form->dropDownList(
						$model,
						'res_id',
						$data,
						array('empty'=>Yii::t('fim','Search All')));
				?>
				<?php echo $form->error($model,'res_id'); ?>
				<?php echo $form->error($model,'res_id'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'user_id'); ?></div>
			<div class="mws-form-item">
            	<?php //echo $form->textField($model, 'user_id'); ?>
                <?php
					$data = CHtml::listData(lepUser::model()->findAll(), 
						'user_id', 'username');
					echo $form->dropDownList(
						$model,
						'user_id',
						$data,
						array('empty'=>Yii::t('fim','Search All')));
				?>
				<?php echo $form->error($model,'user_id'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'content'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'content'); ?>
				<?php echo $form->error($model,'content'); ?>
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
