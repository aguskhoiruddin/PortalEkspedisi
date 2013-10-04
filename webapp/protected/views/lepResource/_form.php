
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lep-resource-form',
	'enableAjaxValidation' => false,
	'htmlOptions' => array('class'=>'mws-form')
));
?>	<div class="mws-form-inline">
		<div class="mws-form-row">
			<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
			<?php echo $form->errorSummary($model); ?>
		</div>

		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'category_id'); ?></div>
			<div class="mws-form-item">
				<?php //echo $form->textField($model, 'category_id',array('maxlength'=>'255')); ?>
				<?php
					$data = CHtml::listData(lepCategory::model()->findAll(), 
						'category_id', 'title');
					echo $form->dropDownList(
						$model,
						'category_id',
						$data,
						array('empty'=>Yii::t('fim','Search All')));
				?>
				<?php echo $form->error($model,'category_id'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'description'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'description'); ?>
				<?php echo $form->error($model,'description'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'url'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'url',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'url'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'owner_name'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'owner_name',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'owner_name'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'hits'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'hits'); ?>
				<?php echo $form->error($model,'hits'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'submit_code'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'submit_code',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'submit_code'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'address'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'address',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'address'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'city'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'city',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'city'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'state'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'state',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'state'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'zip'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'zip',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'zip'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'country'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'country',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'country'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'last_update'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'last_update',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'last_update'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'featured'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'featured',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'featured'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'featured_expired'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'featured_expired',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'featured_expired'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'tag'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textArea($model, 'tag'); ?>
				<?php echo $form->error($model,'tag'); ?>
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
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ar_number_votes'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ar_number_votes'); ?>
				<?php echo $form->error($model,'ar_number_votes'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ar_total_points'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ar_total_points'); ?>
				<?php echo $form->error($model,'ar_total_points'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ar_dec_avg'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ar_dec_avg'); ?>
				<?php echo $form->error($model,'ar_dec_avg'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ar_whole_avg'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ar_whole_avg'); ?>
				<?php echo $form->error($model,'ar_whole_avg'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_googlepr'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_googlepr',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_googlepr'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_alexarank'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_alexarank',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_alexarank'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_google_indexed'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_google_indexed',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_google_indexed'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_yahoo_indexed'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_yahoo_indexed',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_yahoo_indexed'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_msn_indexed'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_msn_indexed',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_msn_indexed'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_google_linkback'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_google_linkback',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_google_linkback'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_yahoo_linkback'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_yahoo_linkback',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'ss_yahoo_linkback'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'ss_last_update'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'ss_last_update',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'ss_last_update'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'vote'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'vote'); ?>
				<?php echo $form->error($model,'vote'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'reciprocal_url'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'reciprocal_url',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'reciprocal_url'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'last_checked_online'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'last_checked_online',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'last_checked_online'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'last_checked_reciprocal'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'last_checked_reciprocal',array('maxlength'=>'10')); ?>
				<?php echo $form->error($model,'last_checked_reciprocal'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'online'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'online',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'online'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'reciprocal'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'reciprocal',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'reciprocal'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'phone'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'phone',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'phone'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'fax'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'fax',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'fax'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'logo'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'logo',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'logo'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'suspended'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'suspended',array('maxlength'=>'1')); ?>
				<?php echo $form->error($model,'suspended'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'suspended_reason'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'suspended_reason',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'suspended_reason'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'listing_type'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'listing_type',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'listing_type'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'phone2'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'phone2',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'phone2'); ?>
			</div>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-label"><?php echo $form->labelEx($model,'phone3'); ?></div>
			<div class="mws-form-item">
				<?php echo $form->textField($model, 'phone3',array('maxlength'=>'255')); ?>
				<?php echo $form->error($model,'phone3'); ?>
			</div>
		</div>


		<div class="mws-form-row">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</div>
<?php
$this->endWidget();
?>
