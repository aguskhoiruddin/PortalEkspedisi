<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'res_id'); ?>
		<?php echo $form->textField($model, 'res_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'category_id'); ?>
		<?php echo $form->textField($model, 'category_id',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'url'); ?>
		<?php echo $form->textField($model, 'url',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'owner_name'); ?>
		<?php echo $form->textField($model, 'owner_name',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hits'); ?>
		<?php echo $form->textField($model, 'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'created_at'); ?>
		<?php echo $form->textField($model, 'created_at',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'submit_code'); ?>
		<?php echo $form->textField($model, 'submit_code',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address'); ?>
		<?php echo $form->textField($model, 'address',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state'); ?>
		<?php echo $form->textField($model, 'state',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zip'); ?>
		<?php echo $form->textField($model, 'zip',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'country'); ?>
		<?php echo $form->textField($model, 'country',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_update'); ?>
		<?php echo $form->textField($model, 'last_update',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'featured'); ?>
		<?php echo $form->textField($model, 'featured',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'featured_expired'); ?>
		<?php echo $form->textField($model, 'featured_expired',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'seo_title'); ?>
		<?php echo $form->textField($model, 'seo_title',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tag'); ?>
		<?php echo $form->textArea($model, 'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->textField($model, 'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ar_number_votes'); ?>
		<?php echo $form->textField($model, 'ar_number_votes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ar_total_points'); ?>
		<?php echo $form->textField($model, 'ar_total_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ar_dec_avg'); ?>
		<?php echo $form->textField($model, 'ar_dec_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ar_whole_avg'); ?>
		<?php echo $form->textField($model, 'ar_whole_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_googlepr'); ?>
		<?php echo $form->textField($model, 'ss_googlepr',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_alexarank'); ?>
		<?php echo $form->textField($model, 'ss_alexarank',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_google_indexed'); ?>
		<?php echo $form->textField($model, 'ss_google_indexed',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_yahoo_indexed'); ?>
		<?php echo $form->textField($model, 'ss_yahoo_indexed',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_msn_indexed'); ?>
		<?php echo $form->textField($model, 'ss_msn_indexed',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_google_linkback'); ?>
		<?php echo $form->textField($model, 'ss_google_linkback',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_yahoo_linkback'); ?>
		<?php echo $form->textField($model, 'ss_yahoo_linkback',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ss_last_update'); ?>
		<?php echo $form->textField($model, 'ss_last_update',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'vote'); ?>
		<?php echo $form->textField($model, 'vote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'reciprocal_url'); ?>
		<?php echo $form->textField($model, 'reciprocal_url',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_checked_online'); ?>
		<?php echo $form->textField($model, 'last_checked_online',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'last_checked_reciprocal'); ?>
		<?php echo $form->textField($model, 'last_checked_reciprocal',array('maxlength'=>'10')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'online'); ?>
		<?php echo $form->textField($model, 'online',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'reciprocal'); ?>
		<?php echo $form->textField($model, 'reciprocal',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone'); ?>
		<?php echo $form->textField($model, 'phone',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fax'); ?>
		<?php echo $form->textField($model, 'fax',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'logo'); ?>
		<?php echo $form->textField($model, 'logo',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'suspended'); ?>
		<?php echo $form->textField($model, 'suspended',array('maxlength'=>'1')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'suspended_reason'); ?>
		<?php echo $form->textField($model, 'suspended_reason',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'listing_type'); ?>
		<?php echo $form->textField($model, 'listing_type',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone2'); ?>
		<?php echo $form->textField($model, 'phone2',array('maxlength'=>'255')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone3'); ?>
		<?php echo $form->textField($model, 'phone3',array('maxlength'=>'255')); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
