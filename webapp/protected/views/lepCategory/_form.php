
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-category-form',
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
				<?php echo $form->textField($model, 'parent_id',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'parent_id'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'order_num'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'order_num',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'order_num'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'parents'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'parents',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'parents'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'description'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'description'); ?>
				<?php echo $form->error($model,'description'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'meta_keyword'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'meta_keyword'); ?>
				<?php echo $form->error($model,'meta_keyword'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'has_child'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'has_child',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'has_child'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'num_res'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'num_res'); ?>
				<?php echo $form->error($model,'num_res'); ?>
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
